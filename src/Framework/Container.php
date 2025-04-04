<?php

declare(strict_types=1);

namespace Framework;

use ReflectionClass;
use Closure;
use ReflectionNamedType;
use InvalidArgumentException;

class Container
{
    private array $registry = [];

    public function set(string $name, Closure $value): void
    {
        $this->registry[$name] = $value;
    }

    public function get(string $class_name): object
    {
        if(array_key_exists($class_name,$this->registry)) {

            // () na kraju zato sto prosledjujemo funkciju kroz SET metod u $value
            return $this->registry[$class_name]();

        }

        $reflector = new ReflectionClass($class_name);

        $constructor = $reflector->getConstructor();

        $dependencies = [];

        if($constructor === null) {

            return new $class_name;

        }
        foreach ($constructor->getParameters() as $parameter) {

            // Vraca ime klase zajedno sa Namespace-om
            $type = $parameter->getType();

            if($type === null) {
                throw new InvalidArgumentException("Constructor parameter '{$parameter->getName()}'
                     in the $class_name class 
                     has no type declaration.");
            }

            if( ! ($type instanceof ReflectionNamedType)) {
                throw new InvalidArgumentException("Constructor parameter '{$parameter->getName()}'
                     in the $class_name class is an invalid type: '$type'
                     - only single named types supported");
            }

            if($type->isBuiltin()) {

                throw new InvalidArgumentException("Unable to resolve constructor parameter
                    '{$parameter->getName()}'
                    of type '$type' in the $class_name class.");
            }

            //! Dohvata sve klase koje su potrebne za konstruktor klase -> Autowiring
            $dependencies[] = $this->get((string) $type);
        }


        return new $class_name(...$dependencies);
    }
}
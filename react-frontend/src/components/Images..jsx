import React from "react";

// import banner from './assets/NovaBannerNew.webp'

function Images() {


    return (
        <>
            <div className="flex items-center justify-center gap-10 mt-12 relative">
                <div className="relative flex items-center">
                    <img
                        src="https://img.freepik.com/free-photo/spreadsheet-marketing-budget-report-file-concept_53876-147943.jpg"
                        alt="software"
                        className="w-[220px] h-auto rounded-lg shadow-md"
                    />
                </div>
                <div className="w-14 h-0.5 bg-gray-400"></div>
                <div>
                    <img
                        src="https://img.freepik.com/free-photo/spreadsheet-marketing-budget-report-file-concept_53876-147943.jpg"
                        alt="software"
                        className="w-72 h-auto rounded-xl shadow-lg border-4 border-gray-300"
                    />
                </div>
                <div className="w-14 h-0.5 bg-gray-400"></div>
                <div className="relative flex items-center">
                    <img
                        src="https://img.freepik.com/free-photo/spreadsheet-marketing-budget-report-file-concept_53876-147943.jpg"
                        alt="software"
                        className="w-[220px] h-auto rounded-lg shadow-md"
                    />
                </div>
            </div>


        </>
    );
}

export default Images;

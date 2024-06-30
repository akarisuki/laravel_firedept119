import React, { useState } from "react";
import PrefecturesSelect  from "./PrefecturesSelect";
import FireDepartmentsSelect from "./PrefectureAndFireDepartmentSelect";

function PrefecturePage() {
    const [selectedPrefecture, setSelectedPrefecture] = useState('');

    return (
        <div>
            <PrefecturesSelect onChange={e => setSelectedPrefecture(e.target.value)} />
            <FireDepartmentsSelect prefectureId={selectedPrefecture} />
        </div>
    );
}

export default PrefecturePage
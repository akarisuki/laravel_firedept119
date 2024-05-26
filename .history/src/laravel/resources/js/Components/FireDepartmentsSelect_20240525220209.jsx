import React, { useState, useEffect } from "react";

function FireDepartmentsSelect({ prefectureId }) {
    const [departments, setDepartments] = useState([]);

    useEffect(() => {
        if (prefectureId) {
            fetch(`/api/prefectures/${prefectureId}/fire-departments`)
                .then(response => response.json())
                .then(data => setDepartments(data));
        }
    }, [prefectureId]);

    return (
        <select defaultValue="">
            <option value="">消防本部を選択</option>
            {departments.map(department => (
                <option key={department.id} value={department.id}>
                    {department.name}
                </option>
            ))}
        </select>
    );
}

export default FireDepartmentsSelect;
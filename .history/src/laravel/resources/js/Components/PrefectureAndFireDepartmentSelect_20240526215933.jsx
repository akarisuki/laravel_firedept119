import React, { useState, useEffect } from "react";

const PrefectureAndFireDepartmentSelect = ({ prefectures, fireDepartments }) => {
  const [selectedPrefecture, setSelectedPrefecture] = useState('');
  const [filteredDepartments, setFilteredDepartments] = useState([]);

  useEffect(() => {
    if(selectedPrefecture) {
      const departments = fireDepartments.filter(dept => dept.prefecture_id === parseInt(selectedPrefecture));
      setFilteredDepartments(departments);
    } else {
      setFilteredDepartments([]);
    }
  },[selectedPrefecture, fireDepartments]);

  const handlePrefectureChange = (event) => {
    setSelectedPrefecture(event.target.value);
  };

  return (
    <div>
      <select value={selectedPrefecture} onChange={handlePrefectureChange}>
        <option value="">都道府県を選択</option>
        {prefectures.map(pref => (
          <option key={pref.id} value={pref.id}>{pref.name}</option>
        ))}
      </select>
      <select disabled={}>

      </select>
    </div>
  );
};


export default PrefectureAndFireDepartmentSelect;
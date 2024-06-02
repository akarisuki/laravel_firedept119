import React, { useEffect, useState } from 'react';
import axios from 'axios';




const PulldownMenu = () => {
  const [prefectures, setPrefectures] = useState([]);
  const [firedepartments, setFireDepartments] = useState([]);
  const [selectedPrefecture, setSelectedPrefecture] = useState("");

  useEffect(() => {
      axios.get('/api/prefecture/index')
        .then(response => {
          setPrefectures(response.data);
        })
        .catch(error => {
          console.error('Error fetching prefectures:', error);
        });
  },[]);

  useEffect(() => {
    if (selectedPrefecture) {
      axios.get(`/api/firedepartment/${selectedPrefecture}`)
        .then(response => {
          setFireDepartments(response.data);
        })
        .catch(error => {
          console.error('Error fetching fire departments:', error);
        });
    }
  }, [selectedPrefecture]);

  const handlePrefectureChange = (event) => {
    setSelectedPrefecture(event.target.value);
    setFireDepartments([]);
  };

  const handleFireDepartmentChange = (event) => {
    onFireDepartmentSelect(event.target.value);
  }

  return (
    <div style={{ display: 'flex' }}>
      <div>
        <select onChange={handlePrefectureChange}>
          <option value="">都道府県を選択</option>
          {prefectures.map((prefecture) => (
            <option key={prefecture.id} value={prefecture.id}>{prefecture.name}</option>
          ))}
        </select>
      </div>
      <div style={{ marginLeft: '10px' }}>
        <select onChange={handleFireDepartmentChange} disabled={!selectedPrefecture}>
          <option value="">消防本部を選択</option>
          {firedepartments.map((department) => (
            <option key={department.id} value={department.id}>{department.name}</option>
          ))}
        </select>
      </div>
    </div>
  );
}

export default PulldownMenu;
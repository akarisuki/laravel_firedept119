import React, { useEffect, useState } from 'react';
import axios from 'axios';


//消防本部データを取得する(とりあえずは全部のレコード)

const PulldownMenu = () => {
  const [prefectures, setPrefectures] = useState([]);
  const [firedepartments, setFireDepartments] = useState([]);

  useEffect(() => {
      axios.get('/api/prefecture/index')
        .then(response => {
          setPrefectures(response.data);
        })
        .catch(error => {
          console.error('Error fetching prefectures:', error);
        })

      axios.get('/api/firedepartment/index')
        .then(response => {
          setFireDepartments(response.data);
        })
        .catch(error => {
          console.error('Error fetching prefectures:', error);
        })

    
      
  },[]);

  return (
  <div style={{ display: 'flex' }}>
    <div>
      <select>
        <option value="">選択してください。</option>
        {prefectures.map((prefecture) => (
          <option key={prefecture.id} value={prefecture.id}>{prefecture.name}</option>
        ))}
      </select>
    </div>
    <div></div>
  </div>

  );
}

export default PulldownMenu;
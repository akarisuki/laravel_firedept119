import React, { useEffect, useState } from 'react';
import axios from 'axios';


const PulldownMenu = () => {
  const [prefectures, setPrefectures] = useState([]);

  useEffect(() => {
    axios.get('/api/prefecture/index')
      .then(response => {
        setPrefectures(response.data);
      })
      .catch(error => {
        console.error('Error fetching prefectures:', error);
      })
  },[]);

  return (
  <>
    <select>
      <option value="">選択してください。</option>
    </select>
  </>
  );
}

export default PulldownMenu;
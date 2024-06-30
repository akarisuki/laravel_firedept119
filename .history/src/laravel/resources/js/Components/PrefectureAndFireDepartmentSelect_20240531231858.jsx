import React, { useState } from 'react';
import axios from 'axios';

const prefectures = ["選択してください。","北海道","青森県","岩手県"];

const PulldownMenu = () => {
  const [prefectures, setPrefectures] = useState([]);

  return (
  <>
    <select>
      {prefectures.map((prefecture) => {
        return <option key={prefecture}>{prefecture}</option>
      })}
    </select>
  </>
  );
}

export default PulldownMenu;
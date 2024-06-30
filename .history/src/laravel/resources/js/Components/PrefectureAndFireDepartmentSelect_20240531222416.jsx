import React from 'react';
//import axios from 'axios';

const prefectures = ["北海道","青森県","岩手県"];

const PulldownMenu = () => {
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
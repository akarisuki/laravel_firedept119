import React, { useState, useEffect } from 'react';

function PrefecturesSelect({ onCange }) {
    const [prefectures, setPrefectures] = useState([]);

    useEffect(() => {
        fetch('/api/prefectures')
            .then(response => response.json())
            .then(data => setPrefectures(data));
    }, []);

    return (
        <select onChange={onCange} defaultValue="">
            <option>
              
            </option>
        </select>
    );
}
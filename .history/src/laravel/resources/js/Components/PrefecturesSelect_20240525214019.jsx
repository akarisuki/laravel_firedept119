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
            <option value="">都道府県を選択</option>
            {prefectures.map(prefecture => (
                <option key={prefecture.id} value={prefecture.id}>
                    {prefecture.name}
                </option>
            ))}            
        </select>
    );
}

export default PrefecturesSelect;
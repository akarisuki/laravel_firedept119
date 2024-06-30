import matplotlib.pyplot as plt

# 仮のデータ（実際のデータを使用する場合は適宜修正してください）
years = ['2018', '2019', '2020', '2021', '2022']
debt = [1000, 1100, 1200, 1300, 1400]  # 単位は兆円

# 棒グラフの作成
plt.figure(figsize=(10, 6))
plt.bar(years, debt, color='blue')

# グラフのタイトルとラベル
plt.title('過去5年分の日本国政府の債務残高の合計')
plt.xlabel('年')
plt.ylabel('債務残高（兆円）')

# グラフの表示
plt.show()
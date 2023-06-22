#fetches data from CSV
import pandas as pd
file_Path = 'Sunday.csv'
store_Data = pd.read_csv(file_Path, encoding='utf-8', header=None)

store_Data.head()

store_Data.shape

#--------------------------------------

#data pre-processing
final_data = pd.DataFrame(columns=['Transaction','Items'])
store_Data = store_Data.T
for col in store_Data.columns:
    col_data = list(store_Data[col].dropna())
    temp_dict = {'Transaction':[int(col)]*len(col_data),  'Items':col_data }
    temp_df = pd.DataFrame(temp_dict)
    final_data = pd.concat([final_data, temp_df], ignore_index=True)
final_data.head()

"""
import seaborn as sns
import matplotlib.pyplot as plt
plt.figure(figsize=(15,8))
order = final_data['Items'].value_counts()[:10].index
sns.countplot(x='Items', data=final_data, order=order)
plt.title('Top 10 most selling items')
plt.savefig('graph.png')
plt.show()
"""

len(final_data['Transaction'].unique())

len(final_data['Items'].unique())

#creates an array for unique items in CSV
final_data['Items'].unique()

final_data_dummy = pd.get_dummies(final_data['Items'])
final_data_dummy['Transaction'] = final_data['Transaction']
# i don't want the quantity, I want just that product is bought or #not(after doing dummy yow will get 2 if same item bought twice in a #transaction) so i will use encode_units function
def encode_units(x):
    if x <=  0:
        return 0
    if x >=  1:
        return 1
format_data= final_data_dummy.groupby('Transaction').sum()
format_data = format_data.applymap(encode_units)
format_data.head()

#transaction_data.head(10)

#--------------------------------------

from mlxtend.frequent_patterns import apriori
from mlxtend.frequent_patterns import association_rules
import pandas as pd
import matplotlib.pyplot as plt

# Convert format_data to a boolean DataFrame
format_data_bool = format_data.astype(bool)

# min_support is the limit of support value
# frequent_itemsets has frequency of each item and its combination 
frequent_itemsets = apriori(format_data_bool, min_support=0.05, use_colnames=True)

# Filter frequent_itemsets for items with support >= 0.05
filtered_itemsets = frequent_itemsets[frequent_itemsets['support'] >= 0.05]

# Check if filtered_itemsets is empty
if filtered_itemsets.empty:
    print("No frequent itemsets found with support >= 0.05.")
else:
    print("Filtered Itemsets:")
    print(filtered_itemsets)

    # Create a bar graph
    plt.figure(figsize=(12, 6))
    plt.bar(filtered_itemsets['itemsets'].apply(lambda x: ', '.join(list(x))), filtered_itemsets['support'])
    plt.xlabel('Itemsets')
    plt.ylabel('Support')
    plt.title('Itemsets with Support >= 0.05')
    plt.xticks(rotation=90)
    plt.tight_layout()
    plt.savefig('apriori.png')
    plt.show()



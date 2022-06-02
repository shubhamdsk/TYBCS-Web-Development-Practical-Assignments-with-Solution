import numpy as np
import pandas as pd
from sklearn.linear_model import LinearRegression
from sklearn.model_selection import train_test_split
from sklearn import metrics
from sklearn.metrics import r2_score,mean_squared_error
A = np.random.randint(1,1000,size = (500,5))
df = pd.DataFrame(A,columns = ['ID','TV','Radio','Newspaper','Sales'])
print(df)
x=df.drop(['ID','Radio','Newspaper','Sales'],axis=1)
y=df['Sales']
print(y)

import matplotlib.pyplot as plt
df.plot(x='TV',y='Sales')
plt.title("Total sales by advertising on TV")
plt.xlabel('TV')
plt.ylabel('Sales')
plt.show()

x_train,x_test,y_train,y_test = train_test_split(x,y,test_size=0.3,random_state=0)
regressor= LinearRegression()
regressor.fit(x_train,y_train)
plt.scatter(x_train,y_train,color="green")
plt.plot(x_train,regressor.predict(x_train),color="red",linewidth = 3)
plt.title('Regression test')
plt.xlabel('TV')
plt.ylabel('Sales')
plt.show()


print('Regressor Intercept')
print(regressor.intercept_)
print()

print('Regressor Coefficient')
print(regressor.coef_)

y_pred = regressor.predict(x_test)
df = pd.DataFrame({'Actual':y_test,'Predict': y_pred})
print(df)

print('R2 score : %2f' %r2_score(y_test,y_pred))
print("Mean Absolute Error",metrics.mean_absolute_error(y_test,y_pred))
print("Root Mean Squarred Error",np.sqrt(metrics.mean_squared_error(y_test,y_pred)))

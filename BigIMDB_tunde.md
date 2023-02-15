```python
import pandas as pd
import os
```


```python
##defining access
os.chdir('C:\\Users\\szabo\\OneDrive\\Dokumentumok\\GEOInsight\\Datapao')
```


```python
os.getcwd()
```




    'C:\\Users\\szabo\\OneDrive\\Dokumentumok\\GEOInsight\\Datapao'




```python
##reading database
movies = pd.read_csv('top250.csv', sep = '\t', on_bad_lines='skip')
movies
```




<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Rating</th>
      <th>Number of ratings</th>
      <th>Number of Oscars</th>
      <th>Title of the movie</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>9.2</td>
      <td>2700500</td>
      <td>0</td>
      <td>A remény rabjai</td>
    </tr>
    <tr>
      <th>1</th>
      <td>9.2</td>
      <td>1874568</td>
      <td>3</td>
      <td>A keresztapa</td>
    </tr>
    <tr>
      <th>2</th>
      <td>9.0</td>
      <td>2674302</td>
      <td>2</td>
      <td>A sötét lovag</td>
    </tr>
    <tr>
      <th>3</th>
      <td>9.0</td>
      <td>1280865</td>
      <td>6</td>
      <td>A keresztapa II</td>
    </tr>
    <tr>
      <th>4</th>
      <td>9.0</td>
      <td>797622</td>
      <td>0</td>
      <td>Tizenkét dühös ember</td>
    </tr>
    <tr>
      <th>...</th>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <th>245</th>
      <td>8.0</td>
      <td>30926</td>
      <td>1</td>
      <td>Derszu Uzala</td>
    </tr>
    <tr>
      <th>246</th>
      <td>8.0</td>
      <td>464232</td>
      <td>1</td>
      <td>A segítség</td>
    </tr>
    <tr>
      <th>247</th>
      <td>8.0</td>
      <td>427199</td>
      <td>2</td>
      <td>Aladdin</td>
    </tr>
    <tr>
      <th>248</th>
      <td>8.0</td>
      <td>234103</td>
      <td>8</td>
      <td>Gandhi</td>
    </tr>
    <tr>
      <th>249</th>
      <td>8.0</td>
      <td>270382</td>
      <td>7</td>
      <td>Farkasokkal táncoló</td>
    </tr>
  </tbody>
</table>
<p>250 rows × 4 columns</p>
</div>




```python
##sorting dataframe and extracting the top20 highest rated films
moviesAll = pd.DataFrame(movies.sort_values(by='Rating', ascending=False))
movies20 = moviesAll.drop(moviesAll.index[21: ])
movies20
```




<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Rating</th>
      <th>Number of ratings</th>
      <th>Number of Oscars</th>
      <th>Title of the movie</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>9.2</td>
      <td>2700500</td>
      <td>0</td>
      <td>A remény rabjai</td>
    </tr>
    <tr>
      <th>1</th>
      <td>9.2</td>
      <td>1874568</td>
      <td>3</td>
      <td>A keresztapa</td>
    </tr>
    <tr>
      <th>2</th>
      <td>9.0</td>
      <td>2674302</td>
      <td>2</td>
      <td>A sötét lovag</td>
    </tr>
    <tr>
      <th>3</th>
      <td>9.0</td>
      <td>1280865</td>
      <td>6</td>
      <td>A keresztapa II</td>
    </tr>
    <tr>
      <th>4</th>
      <td>9.0</td>
      <td>797622</td>
      <td>0</td>
      <td>Tizenkét dühös ember</td>
    </tr>
    <tr>
      <th>5</th>
      <td>8.9</td>
      <td>1365144</td>
      <td>7</td>
      <td>Schindler listája</td>
    </tr>
    <tr>
      <th>6</th>
      <td>8.9</td>
      <td>1859601</td>
      <td>11</td>
      <td>A Gyűrűk Ura: A király visszatér</td>
    </tr>
    <tr>
      <th>7</th>
      <td>8.8</td>
      <td>2072977</td>
      <td>1</td>
      <td>Ponyvaregény</td>
    </tr>
    <tr>
      <th>8</th>
      <td>8.8</td>
      <td>1888941</td>
      <td>4</td>
      <td>A Gyűrűk Ura: A gyűrű szövetsége</td>
    </tr>
    <tr>
      <th>9</th>
      <td>8.8</td>
      <td>767110</td>
      <td>0</td>
      <td>A Jó, a Rossz és a Csúf</td>
    </tr>
    <tr>
      <th>10</th>
      <td>8.8</td>
      <td>2097651</td>
      <td>6</td>
      <td>Forrest Gump</td>
    </tr>
    <tr>
      <th>14</th>
      <td>8.7</td>
      <td>1301659</td>
      <td>1</td>
      <td>A Birodalom visszavág</td>
    </tr>
    <tr>
      <th>16</th>
      <td>8.7</td>
      <td>1171414</td>
      <td>1</td>
      <td>Nagymenők</td>
    </tr>
    <tr>
      <th>15</th>
      <td>8.7</td>
      <td>1927209</td>
      <td>4</td>
      <td>Mátrix</td>
    </tr>
    <tr>
      <th>11</th>
      <td>8.7</td>
      <td>2145478</td>
      <td>0</td>
      <td>Harcosok klubja</td>
    </tr>
    <tr>
      <th>13</th>
      <td>8.7</td>
      <td>2372524</td>
      <td>4</td>
      <td>Eredet</td>
    </tr>
    <tr>
      <th>12</th>
      <td>8.7</td>
      <td>1679135</td>
      <td>2</td>
      <td>A Gyűrűk Ura: A két torony</td>
    </tr>
    <tr>
      <th>22</th>
      <td>8.6</td>
      <td>1401974</td>
      <td>5</td>
      <td>Ryan közlegény megmentése</td>
    </tr>
    <tr>
      <th>26</th>
      <td>8.6</td>
      <td>1312707</td>
      <td>0</td>
      <td>Halálsoron</td>
    </tr>
    <tr>
      <th>25</th>
      <td>8.6</td>
      <td>701008</td>
      <td>3</td>
      <td>Az élet szép</td>
    </tr>
    <tr>
      <th>24</th>
      <td>8.6</td>
      <td>1857792</td>
      <td>1</td>
      <td>Csillagok között</td>
    </tr>
  </tbody>
</table>
</div>




```python
movies20.columns = ['Rating', 'Numberofratings', 'NumberofOscars', 'Titleofthemovie']
movies20
```




<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Rating</th>
      <th>Numberofratings</th>
      <th>NumberofOscars</th>
      <th>Titleofthemovie</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>9.2</td>
      <td>2700500</td>
      <td>0</td>
      <td>A remény rabjai</td>
    </tr>
    <tr>
      <th>1</th>
      <td>9.2</td>
      <td>1874568</td>
      <td>3</td>
      <td>A keresztapa</td>
    </tr>
    <tr>
      <th>2</th>
      <td>9.0</td>
      <td>2674302</td>
      <td>2</td>
      <td>A sötét lovag</td>
    </tr>
    <tr>
      <th>3</th>
      <td>9.0</td>
      <td>1280865</td>
      <td>6</td>
      <td>A keresztapa II</td>
    </tr>
    <tr>
      <th>4</th>
      <td>9.0</td>
      <td>797622</td>
      <td>0</td>
      <td>Tizenkét dühös ember</td>
    </tr>
    <tr>
      <th>5</th>
      <td>8.9</td>
      <td>1365144</td>
      <td>7</td>
      <td>Schindler listája</td>
    </tr>
    <tr>
      <th>6</th>
      <td>8.9</td>
      <td>1859601</td>
      <td>11</td>
      <td>A Gyűrűk Ura: A király visszatér</td>
    </tr>
    <tr>
      <th>7</th>
      <td>8.8</td>
      <td>2072977</td>
      <td>1</td>
      <td>Ponyvaregény</td>
    </tr>
    <tr>
      <th>8</th>
      <td>8.8</td>
      <td>1888941</td>
      <td>4</td>
      <td>A Gyűrűk Ura: A gyűrű szövetsége</td>
    </tr>
    <tr>
      <th>9</th>
      <td>8.8</td>
      <td>767110</td>
      <td>0</td>
      <td>A Jó, a Rossz és a Csúf</td>
    </tr>
    <tr>
      <th>10</th>
      <td>8.8</td>
      <td>2097651</td>
      <td>6</td>
      <td>Forrest Gump</td>
    </tr>
    <tr>
      <th>14</th>
      <td>8.7</td>
      <td>1301659</td>
      <td>1</td>
      <td>A Birodalom visszavág</td>
    </tr>
    <tr>
      <th>16</th>
      <td>8.7</td>
      <td>1171414</td>
      <td>1</td>
      <td>Nagymenők</td>
    </tr>
    <tr>
      <th>15</th>
      <td>8.7</td>
      <td>1927209</td>
      <td>4</td>
      <td>Mátrix</td>
    </tr>
    <tr>
      <th>11</th>
      <td>8.7</td>
      <td>2145478</td>
      <td>0</td>
      <td>Harcosok klubja</td>
    </tr>
    <tr>
      <th>13</th>
      <td>8.7</td>
      <td>2372524</td>
      <td>4</td>
      <td>Eredet</td>
    </tr>
    <tr>
      <th>12</th>
      <td>8.7</td>
      <td>1679135</td>
      <td>2</td>
      <td>A Gyűrűk Ura: A két torony</td>
    </tr>
    <tr>
      <th>22</th>
      <td>8.6</td>
      <td>1401974</td>
      <td>5</td>
      <td>Ryan közlegény megmentése</td>
    </tr>
    <tr>
      <th>26</th>
      <td>8.6</td>
      <td>1312707</td>
      <td>0</td>
      <td>Halálsoron</td>
    </tr>
    <tr>
      <th>25</th>
      <td>8.6</td>
      <td>701008</td>
      <td>3</td>
      <td>Az élet szép</td>
    </tr>
    <tr>
      <th>24</th>
      <td>8.6</td>
      <td>1857792</td>
      <td>1</td>
      <td>Csillagok között</td>
    </tr>
  </tbody>
</table>
</div>




```python
##find the movie with the maximum number of ratings
movies20.Numberofratings.max()
```




    2700500




```python
##adding and calculating Penalty column 
movies20['Penalty'] = ((2700500 - movies20.Numberofratings)/1000000).round(decimals=1)
movies20
```




<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Rating</th>
      <th>Numberofratings</th>
      <th>NumberofOscars</th>
      <th>Titleofthemovie</th>
      <th>Penalty</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>9.2</td>
      <td>2700500</td>
      <td>0</td>
      <td>A remény rabjai</td>
      <td>0.0</td>
    </tr>
    <tr>
      <th>1</th>
      <td>9.2</td>
      <td>1874568</td>
      <td>3</td>
      <td>A keresztapa</td>
      <td>0.8</td>
    </tr>
    <tr>
      <th>2</th>
      <td>9.0</td>
      <td>2674302</td>
      <td>2</td>
      <td>A sötét lovag</td>
      <td>0.0</td>
    </tr>
    <tr>
      <th>3</th>
      <td>9.0</td>
      <td>1280865</td>
      <td>6</td>
      <td>A keresztapa II</td>
      <td>1.4</td>
    </tr>
    <tr>
      <th>4</th>
      <td>9.0</td>
      <td>797622</td>
      <td>0</td>
      <td>Tizenkét dühös ember</td>
      <td>1.9</td>
    </tr>
    <tr>
      <th>5</th>
      <td>8.9</td>
      <td>1365144</td>
      <td>7</td>
      <td>Schindler listája</td>
      <td>1.3</td>
    </tr>
    <tr>
      <th>6</th>
      <td>8.9</td>
      <td>1859601</td>
      <td>11</td>
      <td>A Gyűrűk Ura: A király visszatér</td>
      <td>0.8</td>
    </tr>
    <tr>
      <th>7</th>
      <td>8.8</td>
      <td>2072977</td>
      <td>1</td>
      <td>Ponyvaregény</td>
      <td>0.6</td>
    </tr>
    <tr>
      <th>8</th>
      <td>8.8</td>
      <td>1888941</td>
      <td>4</td>
      <td>A Gyűrűk Ura: A gyűrű szövetsége</td>
      <td>0.8</td>
    </tr>
    <tr>
      <th>9</th>
      <td>8.8</td>
      <td>767110</td>
      <td>0</td>
      <td>A Jó, a Rossz és a Csúf</td>
      <td>1.9</td>
    </tr>
    <tr>
      <th>10</th>
      <td>8.8</td>
      <td>2097651</td>
      <td>6</td>
      <td>Forrest Gump</td>
      <td>0.6</td>
    </tr>
    <tr>
      <th>14</th>
      <td>8.7</td>
      <td>1301659</td>
      <td>1</td>
      <td>A Birodalom visszavág</td>
      <td>1.4</td>
    </tr>
    <tr>
      <th>16</th>
      <td>8.7</td>
      <td>1171414</td>
      <td>1</td>
      <td>Nagymenők</td>
      <td>1.5</td>
    </tr>
    <tr>
      <th>15</th>
      <td>8.7</td>
      <td>1927209</td>
      <td>4</td>
      <td>Mátrix</td>
      <td>0.8</td>
    </tr>
    <tr>
      <th>11</th>
      <td>8.7</td>
      <td>2145478</td>
      <td>0</td>
      <td>Harcosok klubja</td>
      <td>0.6</td>
    </tr>
    <tr>
      <th>13</th>
      <td>8.7</td>
      <td>2372524</td>
      <td>4</td>
      <td>Eredet</td>
      <td>0.3</td>
    </tr>
    <tr>
      <th>12</th>
      <td>8.7</td>
      <td>1679135</td>
      <td>2</td>
      <td>A Gyűrűk Ura: A két torony</td>
      <td>1.0</td>
    </tr>
    <tr>
      <th>22</th>
      <td>8.6</td>
      <td>1401974</td>
      <td>5</td>
      <td>Ryan közlegény megmentése</td>
      <td>1.3</td>
    </tr>
    <tr>
      <th>26</th>
      <td>8.6</td>
      <td>1312707</td>
      <td>0</td>
      <td>Halálsoron</td>
      <td>1.4</td>
    </tr>
    <tr>
      <th>25</th>
      <td>8.6</td>
      <td>701008</td>
      <td>3</td>
      <td>Az élet szép</td>
      <td>2.0</td>
    </tr>
    <tr>
      <th>24</th>
      <td>8.6</td>
      <td>1857792</td>
      <td>1</td>
      <td>Csillagok között</td>
      <td>0.8</td>
    </tr>
  </tbody>
</table>
</div>




```python
##adding and calculating revised rating column 
movies20['RevisedRating'] = (movies20.Rating - movies20.Penalty).round(decimals=1)
movies20
```




<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Rating</th>
      <th>Numberofratings</th>
      <th>NumberofOscars</th>
      <th>Titleofthemovie</th>
      <th>Penalty</th>
      <th>RevisedRating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>9.2</td>
      <td>2700500</td>
      <td>0</td>
      <td>A remény rabjai</td>
      <td>0.0</td>
      <td>9.2</td>
    </tr>
    <tr>
      <th>1</th>
      <td>9.2</td>
      <td>1874568</td>
      <td>3</td>
      <td>A keresztapa</td>
      <td>0.8</td>
      <td>8.4</td>
    </tr>
    <tr>
      <th>2</th>
      <td>9.0</td>
      <td>2674302</td>
      <td>2</td>
      <td>A sötét lovag</td>
      <td>0.0</td>
      <td>9.0</td>
    </tr>
    <tr>
      <th>3</th>
      <td>9.0</td>
      <td>1280865</td>
      <td>6</td>
      <td>A keresztapa II</td>
      <td>1.4</td>
      <td>7.6</td>
    </tr>
    <tr>
      <th>4</th>
      <td>9.0</td>
      <td>797622</td>
      <td>0</td>
      <td>Tizenkét dühös ember</td>
      <td>1.9</td>
      <td>7.1</td>
    </tr>
    <tr>
      <th>5</th>
      <td>8.9</td>
      <td>1365144</td>
      <td>7</td>
      <td>Schindler listája</td>
      <td>1.3</td>
      <td>7.6</td>
    </tr>
    <tr>
      <th>6</th>
      <td>8.9</td>
      <td>1859601</td>
      <td>11</td>
      <td>A Gyűrűk Ura: A király visszatér</td>
      <td>0.8</td>
      <td>8.1</td>
    </tr>
    <tr>
      <th>7</th>
      <td>8.8</td>
      <td>2072977</td>
      <td>1</td>
      <td>Ponyvaregény</td>
      <td>0.6</td>
      <td>8.2</td>
    </tr>
    <tr>
      <th>8</th>
      <td>8.8</td>
      <td>1888941</td>
      <td>4</td>
      <td>A Gyűrűk Ura: A gyűrű szövetsége</td>
      <td>0.8</td>
      <td>8.0</td>
    </tr>
    <tr>
      <th>9</th>
      <td>8.8</td>
      <td>767110</td>
      <td>0</td>
      <td>A Jó, a Rossz és a Csúf</td>
      <td>1.9</td>
      <td>6.9</td>
    </tr>
    <tr>
      <th>10</th>
      <td>8.8</td>
      <td>2097651</td>
      <td>6</td>
      <td>Forrest Gump</td>
      <td>0.6</td>
      <td>8.2</td>
    </tr>
    <tr>
      <th>14</th>
      <td>8.7</td>
      <td>1301659</td>
      <td>1</td>
      <td>A Birodalom visszavág</td>
      <td>1.4</td>
      <td>7.3</td>
    </tr>
    <tr>
      <th>16</th>
      <td>8.7</td>
      <td>1171414</td>
      <td>1</td>
      <td>Nagymenők</td>
      <td>1.5</td>
      <td>7.2</td>
    </tr>
    <tr>
      <th>15</th>
      <td>8.7</td>
      <td>1927209</td>
      <td>4</td>
      <td>Mátrix</td>
      <td>0.8</td>
      <td>7.9</td>
    </tr>
    <tr>
      <th>11</th>
      <td>8.7</td>
      <td>2145478</td>
      <td>0</td>
      <td>Harcosok klubja</td>
      <td>0.6</td>
      <td>8.1</td>
    </tr>
    <tr>
      <th>13</th>
      <td>8.7</td>
      <td>2372524</td>
      <td>4</td>
      <td>Eredet</td>
      <td>0.3</td>
      <td>8.4</td>
    </tr>
    <tr>
      <th>12</th>
      <td>8.7</td>
      <td>1679135</td>
      <td>2</td>
      <td>A Gyűrűk Ura: A két torony</td>
      <td>1.0</td>
      <td>7.7</td>
    </tr>
    <tr>
      <th>22</th>
      <td>8.6</td>
      <td>1401974</td>
      <td>5</td>
      <td>Ryan közlegény megmentése</td>
      <td>1.3</td>
      <td>7.3</td>
    </tr>
    <tr>
      <th>26</th>
      <td>8.6</td>
      <td>1312707</td>
      <td>0</td>
      <td>Halálsoron</td>
      <td>1.4</td>
      <td>7.2</td>
    </tr>
    <tr>
      <th>25</th>
      <td>8.6</td>
      <td>701008</td>
      <td>3</td>
      <td>Az élet szép</td>
      <td>2.0</td>
      <td>6.6</td>
    </tr>
    <tr>
      <th>24</th>
      <td>8.6</td>
      <td>1857792</td>
      <td>1</td>
      <td>Csillagok között</td>
      <td>0.8</td>
      <td>7.8</td>
    </tr>
  </tbody>
</table>
</div>




```python
##adding and calculatong corrected rating column by calculating adjusted rating based on number of ratings
movies20['Rating2'] = [0 if i<1 else 0.3 if i<3 else 0.5 if i<6 else 1 if i<11 else 1.5 if i>10 else 0 for i in movies20.NumberofOscars]
movies20['CorrRating'] = (movies20.Rating + movies20.Rating2).round(decimals=1) 
movies20
```




<div>
<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
  <thead>
    <tr style="text-align: right;">
      <th></th>
      <th>Rating</th>
      <th>Numberofratings</th>
      <th>NumberofOscars</th>
      <th>Titleofthemovie</th>
      <th>Penalty</th>
      <th>RevisedRating</th>
      <th>Rating2</th>
      <th>CorrRating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>9.2</td>
      <td>2700500</td>
      <td>0</td>
      <td>A remény rabjai</td>
      <td>0.0</td>
      <td>9.2</td>
      <td>0.0</td>
      <td>9.2</td>
    </tr>
    <tr>
      <th>1</th>
      <td>9.2</td>
      <td>1874568</td>
      <td>3</td>
      <td>A keresztapa</td>
      <td>0.8</td>
      <td>8.4</td>
      <td>0.5</td>
      <td>9.7</td>
    </tr>
    <tr>
      <th>2</th>
      <td>9.0</td>
      <td>2674302</td>
      <td>2</td>
      <td>A sötét lovag</td>
      <td>0.0</td>
      <td>9.0</td>
      <td>0.3</td>
      <td>9.3</td>
    </tr>
    <tr>
      <th>3</th>
      <td>9.0</td>
      <td>1280865</td>
      <td>6</td>
      <td>A keresztapa II</td>
      <td>1.4</td>
      <td>7.6</td>
      <td>1.0</td>
      <td>10.0</td>
    </tr>
    <tr>
      <th>4</th>
      <td>9.0</td>
      <td>797622</td>
      <td>0</td>
      <td>Tizenkét dühös ember</td>
      <td>1.9</td>
      <td>7.1</td>
      <td>0.0</td>
      <td>9.0</td>
    </tr>
    <tr>
      <th>5</th>
      <td>8.9</td>
      <td>1365144</td>
      <td>7</td>
      <td>Schindler listája</td>
      <td>1.3</td>
      <td>7.6</td>
      <td>1.0</td>
      <td>9.9</td>
    </tr>
    <tr>
      <th>6</th>
      <td>8.9</td>
      <td>1859601</td>
      <td>11</td>
      <td>A Gyűrűk Ura: A király visszatér</td>
      <td>0.8</td>
      <td>8.1</td>
      <td>1.5</td>
      <td>10.4</td>
    </tr>
    <tr>
      <th>7</th>
      <td>8.8</td>
      <td>2072977</td>
      <td>1</td>
      <td>Ponyvaregény</td>
      <td>0.6</td>
      <td>8.2</td>
      <td>0.3</td>
      <td>9.1</td>
    </tr>
    <tr>
      <th>8</th>
      <td>8.8</td>
      <td>1888941</td>
      <td>4</td>
      <td>A Gyűrűk Ura: A gyűrű szövetsége</td>
      <td>0.8</td>
      <td>8.0</td>
      <td>0.5</td>
      <td>9.3</td>
    </tr>
    <tr>
      <th>9</th>
      <td>8.8</td>
      <td>767110</td>
      <td>0</td>
      <td>A Jó, a Rossz és a Csúf</td>
      <td>1.9</td>
      <td>6.9</td>
      <td>0.0</td>
      <td>8.8</td>
    </tr>
    <tr>
      <th>10</th>
      <td>8.8</td>
      <td>2097651</td>
      <td>6</td>
      <td>Forrest Gump</td>
      <td>0.6</td>
      <td>8.2</td>
      <td>1.0</td>
      <td>9.8</td>
    </tr>
    <tr>
      <th>14</th>
      <td>8.7</td>
      <td>1301659</td>
      <td>1</td>
      <td>A Birodalom visszavág</td>
      <td>1.4</td>
      <td>7.3</td>
      <td>0.3</td>
      <td>9.0</td>
    </tr>
    <tr>
      <th>16</th>
      <td>8.7</td>
      <td>1171414</td>
      <td>1</td>
      <td>Nagymenők</td>
      <td>1.5</td>
      <td>7.2</td>
      <td>0.3</td>
      <td>9.0</td>
    </tr>
    <tr>
      <th>15</th>
      <td>8.7</td>
      <td>1927209</td>
      <td>4</td>
      <td>Mátrix</td>
      <td>0.8</td>
      <td>7.9</td>
      <td>0.5</td>
      <td>9.2</td>
    </tr>
    <tr>
      <th>11</th>
      <td>8.7</td>
      <td>2145478</td>
      <td>0</td>
      <td>Harcosok klubja</td>
      <td>0.6</td>
      <td>8.1</td>
      <td>0.0</td>
      <td>8.7</td>
    </tr>
    <tr>
      <th>13</th>
      <td>8.7</td>
      <td>2372524</td>
      <td>4</td>
      <td>Eredet</td>
      <td>0.3</td>
      <td>8.4</td>
      <td>0.5</td>
      <td>9.2</td>
    </tr>
    <tr>
      <th>12</th>
      <td>8.7</td>
      <td>1679135</td>
      <td>2</td>
      <td>A Gyűrűk Ura: A két torony</td>
      <td>1.0</td>
      <td>7.7</td>
      <td>0.3</td>
      <td>9.0</td>
    </tr>
    <tr>
      <th>22</th>
      <td>8.6</td>
      <td>1401974</td>
      <td>5</td>
      <td>Ryan közlegény megmentése</td>
      <td>1.3</td>
      <td>7.3</td>
      <td>0.5</td>
      <td>9.1</td>
    </tr>
    <tr>
      <th>26</th>
      <td>8.6</td>
      <td>1312707</td>
      <td>0</td>
      <td>Halálsoron</td>
      <td>1.4</td>
      <td>7.2</td>
      <td>0.0</td>
      <td>8.6</td>
    </tr>
    <tr>
      <th>25</th>
      <td>8.6</td>
      <td>701008</td>
      <td>3</td>
      <td>Az élet szép</td>
      <td>2.0</td>
      <td>6.6</td>
      <td>0.5</td>
      <td>9.1</td>
    </tr>
    <tr>
      <th>24</th>
      <td>8.6</td>
      <td>1857792</td>
      <td>1</td>
      <td>Csillagok között</td>
      <td>0.8</td>
      <td>7.8</td>
      <td>0.3</td>
      <td>8.9</td>
    </tr>
  </tbody>
</table>
</div>




```python
movies20.to_csv('C:\\Users\\szabo\\OneDrive\\Dokumentumok\\GEOInsight\\Datapao\\tunde20.csv', encoding='utf-8', sep = '\t')
```

#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import os


# In[2]:


##defining access
os.chdir('C:\\Users\\szabo\\OneDrive\\Dokumentumok\\GEOInsight\\Datapao')


# In[3]:


os.getcwd()


# In[4]:


##reading database
movies = pd.read_csv('top250.csv', sep = '\t', on_bad_lines='skip')
movies


# In[5]:


##sorting dataframe and extracting the top20 highest rated films
moviesAll = pd.DataFrame(movies.sort_values(by='Rating', ascending=False))
movies20 = moviesAll.drop(moviesAll.index[21: ])
movies20


# In[6]:


movies20.columns = ['Rating', 'Numberofratings', 'NumberofOscars', 'Titleofthemovie']
movies20


# In[7]:


##find the movie with the maximum number of ratings
movies20.Numberofratings.max()


# In[8]:


##adding and calculating Penalty column 
movies20['Penalty'] = ((2700500 - movies20.Numberofratings)/1000000).round(decimals=1)
movies20


# In[9]:


##adding and calculating revised rating column 
movies20['RevisedRating'] = (movies20.Rating - movies20.Penalty).round(decimals=1)
movies20


# In[10]:


##adding and calculatong corrected rating column by calculating adjusted rating based on number of ratings
movies20['Rating2'] = [0 if i<1 else 0.3 if i<3 else 0.5 if i<6 else 1 if i<11 else 1.5 if i>10 else 0 for i in movies20.NumberofOscars]
movies20['CorrRating'] = (movies20.Rating + movies20.Rating2).round(decimals=1) 
movies20


# In[11]:


movies20.to_csv('C:\\Users\\szabo\\OneDrive\\Dokumentumok\\GEOInsight\\Datapao\\tunde20.csv', encoding='utf-8', sep = '\t')


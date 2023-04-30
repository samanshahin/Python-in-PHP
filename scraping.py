import requests
#pip install requests bs4
from bs4 import BeautifulSoup

URL = 'https://www.lbc.co.uk/news/'
headers={"user-agent": 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0'}
page = requests.get(URL, headers=headers)
soup = BeautifulSoup(page.content, 'html.parser', from_encoding="ISO-8859-7")
m_news = soup.findAll("h3") # , { "class" : "news" }
print('Here\'s the first 10 news items from https://www.lbc.co.uk/news/ website...')
for m in range(10):
    print(m_news[m].get_text())
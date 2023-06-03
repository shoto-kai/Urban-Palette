import requests
import xmltodict

API_KEY = "?key=201ddd7866a13050&"

url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/" + API_KEY

lat = 35.655
lng = 139.695

n = 100
l = []
x = 0
for i in range(n):
    for j in range(n):
        l.append({"id":x,"lat":lat+0.0001*i,"lng":lng+0.0001*j})
        x += 1

for i in l:
    locate = "lat=" + str(i["lat"]) + "&lng=" + str(i["lng"]) + "&range=1&order=10"

    result = requests.get(url + locate)

    data = result.text
    json = xmltodict.parse(data)

    results = json['results']
    print('lat:',i['lat'], 'lng:',i['lng'], 'name:', results['shop'][0]['name'])
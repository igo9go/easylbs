<h1 align="center"> easylbs </h1>

<p align="center">一款LBS API组件.</p>


## Installing

```shell
$ composer require gundy/easylbs -vvv
```

## 配置

在使用本扩展之前，你需要去 [腾讯位置服务](https://lbs.qq.com/) 注册账号，然后创建应用，获取应用的 API Key。

## Usage

```php
use  Gundy\Easylbs\Factory;

// 腾讯地图LBS API Key
$key = 'L3JBZ-XR6KV-7LKPK-UUXQC-MV35S-4BFTQ';
$config = [
    'key' => $key
];
$app = Factory::QQ($config);
```

###  地点搜索

```php
$params =[
    'keyword' => "酒店",
    'boundary' => 'region(北京,0)',
];
$res = $app->searchPlace($params);
print_r($res);
```
示例：

```json
{
    "status": 0,
    "message": "query ok",
    "count": 2500,
    "request_id": "060190230178738eb646eb2eb072f5eb11adebb3f5e6",
    "data": [
        {
            "id": "7987947683463136249",
            "title": "永泰福朋喜来登酒店",
            "address": "北京市海淀区远大路25号",
            "tel": "010-88898800; 010-88898888",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 39.95775,
                "lng": 116.27974
            },
            "ad_info": {
                "adcode": 110108,
                "province": "北京市",
                "city": "北京市",
                "district": "海淀区"
            }
        },
        {
            "id": "2892798972637244762",
            "title": "云峰山童话树屋",
            "address": "北京市密云区燕落村云峰山自然风景区内",
            "tel": "010-81098688",
            "category": "酒店宾馆:酒店宾馆",
            "type": 0,
            "location": {
                "lat": 40.589124,
                "lng": 116.956674
            },
            "ad_info": {
                "adcode": 110118,
                "province": "北京市",
                "city": "北京市",
                "district": "密云区"
            }
        },
        {
            "id": "1043299057989721718",
            "title": "尚隐·泉都市生活馆",
            "address": "北京市丰台区小屯双林东路8号",
            "tel": " ",
            "category": "酒店宾馆:度假村",
            "type": 0,
            "location": {
                "lat": 39.877316,
                "lng": 116.256397
            },
            "ad_info": {
                "adcode": 110106,
                "province": "北京市",
                "city": "北京市",
                "district": "丰台区"
            }
        },
        {
            "id": "9718531218220139859",
            "title": "北京会议中心",
            "address": "北京市朝阳区来广营西路88号",
            "tel": "010-84901668;010-84901458;010-84901459",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 40.021,
                "lng": 116.42843
            },
            "ad_info": {
                "adcode": 110105,
                "province": "北京市",
                "city": "北京市",
                "district": "朝阳区"
            }
        },
        {
            "id": "883837519094177688",
            "title": "钓鱼台国宾馆",
            "address": "北京市海淀区阜成路2号",
            "tel": "010-58591188",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 39.92271,
                "lng": 116.33236
            },
            "ad_info": {
                "adcode": 110108,
                "province": "北京市",
                "city": "北京市",
                "district": "海淀区"
            }
        },
        {
            "id": "13833155074774121278",
            "title": "北京香格里拉饭店",
            "address": "北京市海淀区紫竹院路29号",
            "tel": "010-68412211",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 39.944455,
                "lng": 116.308329
            },
            "ad_info": {
                "adcode": 110108,
                "province": "北京市",
                "city": "北京市",
                "district": "海淀区"
            }
        },
        {
            "id": "3161565500563468633",
            "title": "首都大酒店",
            "address": "北京市东城区前门东大街3号",
            "tel": "010-58159988;010-65120309",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 39.901864,
                "lng": 116.409227
            },
            "ad_info": {
                "adcode": 110101,
                "province": "北京市",
                "city": "北京市",
                "district": "东城区"
            }
        },
        {
            "id": "14241478084495387329",
            "title": "北京饭店",
            "address": "北京市东城区东长安街33号",
            "tel": "010-65137766",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 39.90901,
                "lng": 116.4101
            },
            "ad_info": {
                "adcode": 110101,
                "province": "北京市",
                "city": "北京市",
                "district": "东城区"
            }
        },
        {
            "id": "294853408830955987",
            "title": "北京国际饭店",
            "address": "北京市东城区建国门内大街9号",
            "tel": "010-65126688",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 39.90981,
                "lng": 116.42857
            },
            "ad_info": {
                "adcode": 110101,
                "province": "北京市",
                "city": "北京市",
                "district": "东城区"
            }
        },
        {
            "id": "5870241694364570788",
            "title": "北京远通维景国际大酒店",
            "address": "北京市西城区平安里西大街30号",
            "tel": "010-66026688",
            "category": "酒店宾馆:星级酒店",
            "type": 0,
            "location": {
                "lat": 39.9313,
                "lng": 116.35678
            },
            "ad_info": {
                "adcode": 110102,
                "province": "北京市",
                "city": "北京市",
                "district": "西城区"
            }
        }
    ],
    "region": {
        "title": "北京市"
    }
}
```

### 自定义请求
```
$params = [
    'from' => '39.984042,116.307535',
    'to' => '39.976249,116.316569'
];
$res = $app->sendRequest('/ws/direction/v1/walking', $params);
```

### Documentation
- [腾讯位置服务](https://lbs.qq.com/webservice_v1/index.html)

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/igo9go/easylbs/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/igo9go/easylbs/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## todo
- 集成百度地图服务
- 集成高德地图服务
- 适配Laravel框架

## License

MIT
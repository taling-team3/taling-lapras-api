# 탈잉 클론코딩 프로젝트

#### 팀 마스코트: 라프라스

<img src="https://pds.joongang.co.kr/news/component/htmlphoto_mmdata/201609/22/htm_20160922124534774155.png">

## 프로젝트 소개

PHP/Laravel 개발자와 TypeScript/Vue.js 개발자가 팀을 결성해 탈잉의 홈, 클래스 상세, 검색 페이지를 클론 코딩하였습니다.

## 기술스택

<img src="https://img.shields.io/badge/php-777BB4?style=for-the-badge&logo=php&logoColor=white"/><img src="https://img.shields.io/badge/laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/><img src="https://img.shields.io/badge/vue.js-4FC08D?style=for-the-badge&logo=vue.js&logoColor=white"/><img src="https://img.shields.io/badge/TypeScript-3178C6?style=for-the-badge&logo=TypeScript&logoColor=white"/><img src="https://img.shields.io/badge/TailwindCSS-06B6D4?style=for-the-badge&logo=TailwindCSS&logoColor=white"/><img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=GitHub&logoColor=white"/>
<br><br>

## 개발 팀원

박경서(백엔드-인프라)  
김현진(백엔드-API)  
이종화(프론트엔드)  
지혜수(프론트엔드)

## 개발 일정

2022.3.16 ~ 2022.3.25.

## 개발환경 세팅

개발환경을 세팅하기 위해서는 `Docker`와 `Docker Compose` 가 설치 되어 있어야 한다.

```bash
$ git clone git@github.com:taling-team3/taling-lapras-frontend.git
$ cd taling-lapras-frontend
$ docker-compose up -d 
```

접속 URL : http://localhost  
아래 로그 출력 시 권한 필요

```log
The stream or file "/var/www/html/storage/logs/laravel.log" could not be opened in append mode: Failed to open stream: Permission denied The exception occurred while attempting to log:
```

```bash
chown -R www-data:www-data bootstrap/cache
chown -R www-data:www-data storage
chmod -R 777 storage/logs
chmod -R 777 storage/framework
```

## 배포

```bash
$ pwd
..../taling-lapras-frontend
$ git push 
```

Push 또는 Merge 될 경우, [GIT Action](https://github.com/taling-team3/taling-lapras-api/actions) 이 실행 된다.    
GIT Action 을 통해 도커 프라이빗 레지스트리에 이미지가 추가 된다.

최종 배포는 https://portainer.kkyungvelyy.com/ 에서 진행 하면 된다.

## 운영 자료

- FQDN : https://lapras.wo.tc/api
- API 문서 : https://lapras.wo.tc/api/request-docs
- 기타(노션) : https://www.notion.so/taling-lapras/38312bc1cdcd4b49a6910afacda05444

## API 응답 방식
```json
{
  "message": "메세지(string)",
  "error": "성공여부(boolean)",
  "code": 상태코드(integer),
  "results": 결과값(array)
}
```

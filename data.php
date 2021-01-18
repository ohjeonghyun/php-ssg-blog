<?php

$siteTitle = "디자이너 오정현";


// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "CSS 기초 4";
$article4["regDate"] = "2020-01-18 17:28:15";
$article4["writerName"] = "오정현";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["body"] = <<<EOT
# 개요
- 
EOT;

// 게시물 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "CSS 기초 3";
$article3["regDate"] = "2020-01-18 12:12:15";
$article3["writerName"] = "오정현";

// 게시물 2
$article2 = [];
$article3["id"] = 2;
$article2["title"] = "CSS 기초 2";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "오정현";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["body"] = <<<EOT
# 개요
- script 태그를 사용해야 한다.
- src 속성으로 외부 스크립트를 불러올 수 있다.
- defer 속성으로 html 엘리먼트 로딩까지 실행을 유보시킬 수 있다.
- 자식 컨텐츠로 자바스크립트를 넣어서 사용할 수 있다.
  
# 예시 - 자식 컨텐츠로 자바스크립트를 넣어서 사용
```html
<t-script>
var a = 10;
</t-script>
<div class="a"></div>
```
EOT;

// 게시물 1
$article1 = [];
$article3["id"] = 1;
$article1["title"] = "CSS기초 1";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "오정현";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["body"] = <<<EOT


# css 의미
## 개요
- Css는 웹문서에서 스타일을 담당하고 있습니다. 
- 미리 약속한 스타일 속성들을 통해 웹문서에 작성하면 이에 따라 웹문서가 디자인되어 화면에 표시됩니다. 
- 웹문서에서 스타일은 글꼴, 색상, 정렬, 배치 방법 등 여러가지가 있습니다. 겉모습을 결정시키는 요소입니다.


```html



```
EOT;

if ( isset($articleId) ) {
    $articleVarName = "article" . $articleId;
    $selectedArticle = $$articleVarName;
} 


?>
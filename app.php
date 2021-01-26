
  return $fileNames;
}

function getFiles() {

    $fileNames = [];

    $it = new RecursiveDirectoryIterator(".");

    foreach(new RecursiveIteratorIterator($it) as $file) {
        if ( $file->isDir() ) {
            continue;
        }

        if ( strpos($file->getRealPath(), '\.git') !== false ) {
            continue;
        }

        if ( strpos($file->getRealPath(), '\dist') !== false ) {
            continue;
        }

        $fileNames[] = $file->getRealPath();
    }

    return $fileNames;
}

function getMaxArticleId() {
    static $maxId;

<?php

function getArticleTagsHtml($id) {
    $article = &getArticleById($id);

    $html = "";

    foreach ( $article['tags'] as $tag ) {
        $link = getArticleListByTagLink($tag);
        $html .= " <a class=\"tag-link\" href=\"{$link}\">#" . $tag . "</a>";
    }

    return $html;
}

function getArticleLink($id) {
    return "article_detail.ssghtml.php?id={$id}&ext=html";
}
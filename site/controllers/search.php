<?php

return function ($site) {

  $query   = get('q');
  $results = $site->search($query, 'title|text|description');

  return [
    'query'   => $query,
    'results' => $results,
  ];

};
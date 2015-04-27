<? return function($site, $pages, $page) {
  return [
    'students' => $page->find('students')->children(),
    'speakers' => $page->find('speakers')->children(),
    'sponsors' => $page->sponsors()->yaml(),
    'departments' => $page->departments()->yaml()
  ];
};

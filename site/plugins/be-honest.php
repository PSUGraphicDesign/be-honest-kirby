<? class BH {
  public static function body_classes () {
    $classes = [
      page()->uid(),
      page()->template()
    ];

    $classes = array_filter($classes, function($class) {
      return !preg_match('/^\d+$/', $class);
    });

    return join($classes, ' ');
  }
}

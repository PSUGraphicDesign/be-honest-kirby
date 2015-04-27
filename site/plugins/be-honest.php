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

  public static function random_color () {
    $colors = ['orange', 'green', 'pink'];
    return $colors[array_rand($colors)];
  }

  public static function format_url ($url) {
    return str_replace('http://', '', $url);
  }
}

<? class BH {
  public static function body_classes () {
    return join([page()->uid(), page()->template()], ' ');
  }
}

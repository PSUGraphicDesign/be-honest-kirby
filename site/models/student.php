<? class StudentPage extends Page {
  public function work_images ( ) {
    if ( $this->profile_image() ) {
      return $this->images()->not($this->profile_image());
    } else {
      return $this->images();
    }
  }

  public function headshot ( ) {
    if ( $this->hasImages() && $this->profile_image() ) {
      if ( $this->images()->find($this->profile_image()) ) {
        return $this->image($this->profile_image());
      } else {
        return false;
      }
    } else {
      return false;
    }
  }
}

<?php
class MSG{
    private $user_id;
    private $msg;
    private $time; 

    public function __construct(array $data) {
        if (isset($data['user_id']) && isset($data['msg']) && isset($data['time'])) {
           
            $this->user_id = $data['user_id'];
            $this->msg = $data['msg'];
            $this->time = $data['time'];
            
        } else {
            $this->user_id = NULL;
            $this->msg = NULL;
            $this->time = NULL;
            
        }
    }

    // Setters and getters defined here as well
    public function getUser_id() {
        return $this->user_id;
    }
    public function setuser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function getMsg() {
        return $this->msg;
    }
    public function setmsg($msg) {
        $this->msg = $msg;
    }

    public function getTime() {
        return $this->time;
    }
    public function settime($time) {
        $this->time = $time;
    }
}
?>
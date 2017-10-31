<?php
class User{
    private $name;
    private $age;
    private $country;
    private $gender; 

    public function __construct(array $data) {
        print_r($data);
        if (isset($data['name']) && isset($data['age']) && isset($data['country']) && isset($data['gender'])) {
           echo"inside";
            $this->name = $data['name'];
            $this->age = $data['age'];
            $this->country = $data['country'];
            $this->gender = $data['gender'];
            
        } else {
            echo"outside";
            $this->name = NULL;
            $this->age = NULL;
            $this->country = NULL;
            $this->gender = NULL;
            
        }
    }

    // Setters and getters defined here as well
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }
    public function setAge($age) {
        $this->age = $age;
    }

    public function getcountry() {
        return $this->country;
    }
    public function setcountry($country) {
        $this->country = $country;
    }
    public function getGender() {
        return $this->gender;
    }
    public function setGender($gender) {
        $this->gender = $gender;
    }
    
}
?>
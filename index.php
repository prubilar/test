<?php
###clase persona
class Person {
    protected $firstName; // public, protected <-> private
    protected $lastName;
    protected $nickname;
    protected $changedNickname = 0;
    protected $year;

    public function __construct($firstName, $lastName,$year)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->year=$year;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setNickname($nickname)
    {
        if ($this->changedNickname >= 2) {
            throw new Exception(
                "You can't change a nickname more than 2 times"
            );
        }
        $this->nickname = $nickname;
        $this->changedNickname++;
    }




    public function getNickname()
    {
        return $this->nickname;
    }
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName . ' '. $this->year;
    }
}
$person1 = new Person('Duilio', 'Palacios', nacimiento
);
$person1->setNickname('Silence');
$person1->setNickname('Sileence');
exit($person1->getNickname());
echo $person1->getFullName();


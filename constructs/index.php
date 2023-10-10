<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\03\\";
require_once $basePath . "functions.php";

class Team {
    protected $name;
    protected $members = [];

    /**
     * Constructor for the Team class.
     *
     * @param string $name The name of the team
     * @param array $members An array of initial team members
     */
    public function __construct($name, $members = []){
        $this->name = $name;
        $this->members = $members;
    }

    /**
     * Static factory method to create a Team object.
     *
     * @param mixed ...$params Parameters to be passed to the constructor
     * @return Team A new Team object
     */
    public static function start(...$params) {
        return new static(...$params);
    }

    /**
     * Get the name of the team.
     *
     * @return string The name of the team
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Add a new member to the team.
     *
     * @param string $name The name of the member to add
     */
    public function add($name) {
        $this->members[] = $name;
    }

    /**
     * Get the array of team members.
     *
     * @return array The array of team members
     */
    public function members() {
        return $this->members;
    }
}

$acme = new Team("victor", [
    'Messi', 'Kaka'
]);

$acme->add('gabigol');

$start = Team::start('Flamengo', [
    'dida', 'cafu', 'lucio']);

// dd($start);

class Member {

    protected $name;

    /**
     * Constructor for the Member class.
     *
     * @param string $name The name of the member
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * Get the last viewed information for the member.
     *
     * @return mixed Last viewed information
     */
    public function lastViewed() {
        // TODO: Implement lastViewed() method
    }
}

$teamBarcelona = Team::start('Barcelona', [
    new Member('ronaldinho'),
    new Member('cr7')
]);

$teamRealMadrid = Team::start('Barcelona', [
    new Member('belinghan'),
    new Member('kepa')
]);

dd($teamRealMadrid->members());

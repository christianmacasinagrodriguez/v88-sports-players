<?php 
class Player extends CI_Model {
    
    /*  DOCU: This function fetches all players from the database.
    Owner: Chris, Updated by: Chris
    */
    public function get_players() {  
        return $this->db->query("SELECT * FROM sports_players.players")->result_array();
    }

    /*  DOCU: This function fetches players from the database based on the parameters ticked on the clients side. The implode() method turns the array inputs into a string which will work as an argument on the query string.
    Owner: Chris, Updated by: Chris    
    */
    public function filter_players($name, $gender, $sport) {
        $gender_str = implode("','", $gender);
        $sport_str = implode("','", $sport);
        $query = "SELECT * FROM sports_players.players WHERE name LIKE '%{$name}%' AND gender IN ('{$gender_str}') AND sport IN ('{$sport_str}')";
        var_dump($query);
        return $this->db->query($query)->result_array();
    }
}
?>
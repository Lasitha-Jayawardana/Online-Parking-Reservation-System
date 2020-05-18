<?php
class Database
{

    public $result, $con;

    private $dbhost = "localhost",    //Db and files host in same host then use localhost
    $username = "<db username>", //Db username
    $password = "<db password>",            //Db password
    $db = "<db name>", $err; //Db name

    public function __construct()
    {
        /**/
        $this->con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->db);
        if (!$this->con) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct()
    {

        mysqli_close($this->con);

    }

    public function geterrno()
    {
        return $this->err;
    }

    public function Query($q)
    {

        $this->result = mysqli_query($this->con, $q);
        $this->err = mysqli_errno($this->con);
        return
        $this->result;
    }
}







class View_Map
{

    public $slot_ID, $other, $map = "";

    public function __construct($mode)
    {

        $showslot = new Database();

        $q = "SELECT * FROM slot ORDER BY SlotID ASC;";
        $result = $showslot->Query($q);
        $check = mysqli_num_rows($result);

        if ($mode == "view") {

            $da = 'onclick="show(this)"';
        } else if ($mode == "manage") {
            $da = 'onclick="select(this)" onmousedown="drg(this)"';
        }

        while ($row = mysqli_fetch_assoc($result)) {

            switch ($row['Type']) {
                case 'c':
                    /* */
                    $this->map .= '<div id="c' . $row['SlotID'] . '" style="transform: rotate(' . $row['Deg'] . 'deg);top:' . $row['Tp'] . ';left:' . $row['Lft'] . ';"' . $da . '
                class="draggable slot car">

          <span style="position: absolute;margin: auto;align-self: center;color: #880e4f;font-size: 27px;" class="text-center">
          <b> ' . $row['SlotID'] . '</b></span>


</div>';
                    $this->slot_ID = $row['SlotID'];
                    break;
                case 'b':

                    $this->map .= '<div id="b' . $row['SlotID'] . '" style="top:' . $row['Tp'] . ';left:' . $row['Lft'] . ';transform: rotate(' . $row['Deg'] . 'deg);"
               ' . $da . ' class="draggable slot bike">

          <span style="position: absolute;margin: auto;align-self: center;color: #880e4f;font-size: 20px;align-self: center;" class="text-center"><b> ' . $row['SlotID'] . '</b></span>

</div>';

                    $this->slot_ID = $row['SlotID'];

                    break;
                case 'd':

                    $this->map .= '<div id="d' . $row['SlotID'] . '" style="top:' . $row['Tp'] . ';left:' . $row['Lft'] . ';transform: rotate(' . $row['Deg'] . 'deg);"
               ' . $da . ' class="draggable slot direction"></div>';

                    $this->other = $row['SlotID'];
                    break;
                case 'i':

                    $this->map .= '<div id="i' . $row['SlotID'] . '" style="top:' . $row['Tp'] . ';left:' . $row['Lft'] . ';transform: rotate(' . $row['Deg'] . 'deg);"
              ' . $da . ' class="draggable slot in"></div>';

                    $this->other = $row['SlotID'];

                    break;
                case 'o':

                    $this->map .= '<div id="o' . $row['SlotID'] . '" style="top:' . $row['Tp'] . ';left:' . $row['Lft'] . ';transform: rotate(' . $row['Deg'] . 'deg);"
              ' . $da . '  class="draggable slot out"></div>';

                    $this->other = $row['SlotID'];

                    break;

                case 'm':

                    $this->map .= '<div id="m' . $row['SlotID'] . '" style="top:' . $row['Tp'] . ';left:' . $row['Lft'] . ';transform: rotate(' . $row['Deg'] . 'deg);"
              ' . $da . ' class="draggable slot margin"></div>';

                    $this->other = $row['SlotID'];

                    break;

            }

        }

    }

}

?>

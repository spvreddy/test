<?php
    class Employee{

        // Connection
        private $conn;

        // Table
        private $db_table = "Employee";

        // Columns
        public $id;
        public $userId;
        public $channel;
        public $psid;
        public $appId;
        public $event;
        public $ts;
        public $tid;
        public $message;
        public $attachments;
        public $locale;
        public $gender;
        public $timezone;
        public $created;
        public $pciInfo;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // GET ALL
        public function getEmployees(){
            $sqlQuery = "SELECT id, userId, channel, psid, appId, event, ts, tid, message, attachments, locale, gender, timezone, pciInfo, created FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        // CREATE
        public function createEmployee(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        userId = :userId, 
                        channel = :channel, 
                        psid = :psid, 
                        appId = :appId, 
                        event = :event, 
                        ts = :ts, 
                        tid = :tid, 
                        message = :message, 
                        attachments = :attachments, 
                        locale = :locale, 
                        gender = :gender, 
                        timezone = :timezone, 
                        pciInfo = :pciInfo, 
                        created = :created";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->userId=htmlspecialchars(strip_tags($this->userId));
            $this->channel=htmlspecialchars(strip_tags($this->channel));
            $this->psid=htmlspecialchars(strip_tags($this->psid));
            $this->appId=htmlspecialchars(strip_tags($this->appId));
            $this->event=htmlspecialchars(strip_tags($this->event));
            $this->ts=htmlspecialchars(strip_tags($this->ts));
            $this->tid=htmlspecialchars(strip_tags($this->tid));
            $this->message=htmlspecialchars(strip_tags($this->message));
            $this->attachments=htmlspecialchars(strip_tags($this->attachments));
            $this->locale=htmlspecialchars(strip_tags($this->locale));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->timezone=htmlspecialchars(strip_tags($this->timezone));
            $this->pciInfo=($this->pciInfo);
            $this->created=htmlspecialchars(strip_tags($this->created));
        
            // bind data
            $stmt->bindParam(":userId", $this->userId);
            $stmt->bindParam(":channel", $this->channel);
            $stmt->bindParam(":psid", $this->psid);
            $stmt->bindParam(":appId", $this->appId);
            $stmt->bindParam(":event", $this->event);
            $stmt->bindParam(":ts", $this->ts);
            $stmt->bindParam(":tid", $this->tid);
            $stmt->bindParam(":message", $this->message);
            $stmt->bindParam(":attachments", $this->attachments);
            $stmt->bindParam(":locale", $this->locale);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":timezone", $this->timezone);
            $stmt->bindParam(":pciInfo", $this->pciInfo);
            $stmt->bindParam(":created", $this->created);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // READ single
        public function getSingleEmployee(){
            $sqlQuery = "SELECT
                        id, 
                        userId, 
                        channel, 
                        psid, 
                        appId, 
                        event, 
                        ts, 
                        tid, 
                        message, 
                        attachments, 
                        locale, 
                        gender, 
                        timezone, 
                        pciInfo, 
                        created
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";

            $stmt = $this->conn->prepare($sqlQuery);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->userId = $dataRow['userId'];
            $this->channel = $dataRow['channel'];
            $this->psid = $dataRow['psid'];
            $this->appId = $dataRow['appId'];
            $this->event = $dataRow['event'];
            $this->ts = $dataRow['ts'];
            $this->tid = $dataRow['tid'];
            $this->message = $dataRow['message'];
            $this->attachments = $dataRow['attachments'];
            $this->locale = $dataRow['locale'];
            $this->gender = $dataRow['gender'];
            $this->timezone = $dataRow['timezone'];
            $this->pciInfo = $dataRow['pciInfo'];
            $this->created = $dataRow['created'];
        }        

        // UPDATE
        public function updateEmployee(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        userId = :userId, 
                        channel = :channel, 
                        psid = :psid, 
                        appId = :appId, 
                        event = :event, 
                        ts = :ts, 
                        tid = :tid, 
                        message = :message, 
                        attachments = :attachments, 
                        locale = :locale, 
                        gender = :gender, 
                        timezone = :timezone, 
                        pciInfo = :pciInfo, 
                        created = :created
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->userId=htmlspecialchars(strip_tags($this->userId));
            $this->channel=htmlspecialchars(strip_tags($this->channel));
            $this->psid=htmlspecialchars(strip_tags($this->psid));
            $this->appId=htmlspecialchars(strip_tags($this->appId));
            $this->event=htmlspecialchars(strip_tags($this->event));
            $this->ts=htmlspecialchars(strip_tags($this->ts));
            $this->tid=htmlspecialchars(strip_tags($this->tid));
            $this->message=htmlspecialchars(strip_tags($this->message));
            $this->attachments=htmlspecialchars(strip_tags($this->attachments));
            $this->locale=htmlspecialchars(strip_tags($this->locale));
            $this->gender=htmlspecialchars(strip_tags($this->gender));
            $this->timezone=htmlspecialchars(strip_tags($this->timezone));
            $this->pciInfo=($this->pciInfo);
            $this->created=htmlspecialchars(strip_tags($this->created));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":userId", $this->userId);
            $stmt->bindParam(":channel", $this->channel);
            $stmt->bindParam(":psid", $this->psid);
            $stmt->bindParam(":appId", $this->appId);
            $stmt->bindParam(":event", $this->event);
            $stmt->bindParam(":ts", $this->ts);
            $stmt->bindParam(":tid", $this->tid);
            $stmt->bindParam(":message", $this->message);
            $stmt->bindParam(":attachments", $this->attachments);
            $stmt->bindParam(":locale", $this->locale);
            $stmt->bindParam(":gender", $this->gender);
            $stmt->bindParam(":timezone", $this->timezone);
            $stmt->bindParam(":pciInfo", $this->pciInfo);
            $stmt->bindParam(":created", $this->created);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }

        // DELETE
        function deleteEmployee(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }

    }
?>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <script src="Assets/javascript/custom.js"></script>
   <script>
   <?php
        $mesageStack = $this->session->userdata('ServiceMessage');
       
        if(isset($mesageStack)){
            foreach ($mesageStack as $notification) {
                echo sprintf("toastr['%s']('%s')", $notification["type"], $notification["message"]);
            }
            $this->session->unset_userdata('ServiceMessage');
        }
   ?>
   </script>
</body>
</html>

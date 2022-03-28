<?php

class Migration_Hotel {

    public function __construct(string $database)
	{
        $this->migration =& get_instance();

        $this->migration->load->helper('string');
        
        $this->database = $database;
        $this->dev      = false;
        require_once __DIR__ . '/../../assets/ci_libraries/DhonMigrate.php';
		$this->migration->dhonmigrate = new DhonMigrate($this->database);
    }
    
    public function up()
    {
        // /*
        // | -------------------------------------------------------------------
        // |  Api_users table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'api_users';
        // $this->migration->dhonmigrate->ai()->field('id_user', 'INT');
        // $this->migration->dhonmigrate->constraint('100')->unique()->field('username', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('200')->field('password', 'VARCHAR');
        // $this->migration->dhonmigrate->field('stamp', 'INT');
        // $this->migration->dhonmigrate->add_key('id_user');
        // $this->migration->dhonmigrate->create_table('force');

        // $this->migration->dhonmigrate->insert(['username' => 'admin', 'password' => password_hash('admin', PASSWORD_DEFAULT)]);
        // $this->migration->dhonmigrate->insert(['username' => 'receptionist', 'password' => password_hash('receptionist', PASSWORD_DEFAULT)]);

        // /*
        // | -------------------------------------------------------------------
        // |  Rooms table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'rooms';
        // $this->migration->dhonmigrate->ai()->field('id_room', 'INT');
        // $this->migration->dhonmigrate->constraint('50')->field('room_name', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('room_slogan', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('500')->field('room_description', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('100')->field('room_photo', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('100')->field('room_photo_sliding', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->default('0')->field('room_total', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('room_price', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('ac', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('wifi', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('nosmoking', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('breakfast', 'INT');
        // $this->migration->dhonmigrate->constraint('20')->default('singlebed')->field('bed', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->field('created_at', 'INT');
        // $this->migration->dhonmigrate->field('modified_at', 'INT');
        // $this->migration->dhonmigrate->add_key('id_room');
        // $this->migration->dhonmigrate->create_table('force');

        // $this->migration->dhonmigrate->insert([
        //     'room_name' => 'Deluxe Hotel', 
        //     'room_slogan' => 'Make Your Vacation Comfortable', 
        //     'room_description' => 'Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac interdum a, pulvinar ac massa. Nullam malesuada congue', 
        //     'room_photo' => 'hotel_feture_1.jpg', 
        //     'room_photo_sliding' => 'image-1.jpg', 
        //     'room_total' => 3, 
        //     'room_price' => 100000, 
        //     'ac' => 1,
        //     'nosmoking' => 1, 
        //     'breakfast' => 1, 
        //     'bed' => 'queenbed',
        //     'created_at' => time()
        // ]);
        // $this->migration->dhonmigrate->insert([
        //     'room_name' => 'Hotel Bora', 
        //     'room_slogan' => 'Reserve Room for Family Vacation', 
        //     'room_description' => 'Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed.', 
        //     'room_photo' => 'hotel_feture_2.jpg', 
        //     'room_photo_sliding' => 'image-2.jpg', 
        //     'room_total' => 3, 
        //     'room_price' => 200000, 
        //     'ac' => 1, 
        //     'wifi' => 1, 
        //     'nosmoking' => 1, 
        //     'breakfast' => 1, 
        //     'bed' => 'kingbed',
        //     'created_at' => time()
        // ]);
        // $this->migration->dhonmigrate->insert([
        //     'room_name' => 'D’Morvie', 
        //     'room_slogan' => 'A Best Place To Enjoy Your Life', 
        //     'room_description' => 'Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed.', 
        //     'room_photo' => 'hotel_feture_3.jpg', 
        //     'room_photo_sliding' => 'image-3.jpg', 
        //     'room_total' => 3, 
        //     'room_price' => 300000, 
        //     'ac' => 1, 
        //     'wifi' => 1, 
        //     'nosmoking' => 1, 
        //     'breakfast' => 1, 
        //     'bed' => 'twinbed',
        //     'created_at' => time()
        // ]);

        // /*
        // | -------------------------------------------------------------------
        // |  Rooms availability table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'room_reservations';
        // $this->migration->dhonmigrate->ai()->field('id_reservation', 'INT');
        // $this->migration->dhonmigrate->constraint('6')->field('reservation_code', 'VARCHAR');
        // $this->migration->dhonmigrate->field('id_room', 'INT');
        // $this->migration->dhonmigrate->field('reservation_date', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('id_guest', 'INT');
        // $this->migration->dhonmigrate->default('0')->constraint('1')->field('is_active', 'INT');

        // $this->migration->dhonmigrate->field('created_at', 'INT');
        // $this->migration->dhonmigrate->field('modified_at', 'INT');
        // $this->migration->dhonmigrate->add_key('id_reservation');
        // $this->migration->dhonmigrate->create_table('force');

        // /*
        // | -------------------------------------------------------------------
        // |  Reservation Code table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'reservations';
        // $this->migration->dhonmigrate->constraint('6')->field('reservation_code', 'VARCHAR');
        // $this->migration->dhonmigrate->field('id_room', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('id_guest', 'INT');
        // $this->migration->dhonmigrate->constraint('20')->field('checkin', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('20')->field('checkout', 'VARCHAR');
        // $this->migration->dhonmigrate->default('0')->field('total_room', 'INT');
        // $this->migration->dhonmigrate->default('0')->constraint('1')->field('is_active', 'INT');

        // $this->migration->dhonmigrate->field('created_at', 'INT');
        // $this->migration->dhonmigrate->field('modified_at', 'INT');
        // $this->migration->dhonmigrate->add_key('reservation_code');
        // $this->migration->dhonmigrate->create_table('force');

        // /*
        // | -------------------------------------------------------------------
        // |  Guest table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'guests';
        // $this->migration->dhonmigrate->ai()->field('id_guest', 'INT');
        // $this->migration->dhonmigrate->constraint('100')->field('guest_name', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('guest_email', 'VARCHAR', 'nullable');

        // $this->migration->dhonmigrate->field('created_at', 'INT');
        // $this->migration->dhonmigrate->field('modified_at', 'INT');
        // $this->migration->dhonmigrate->add_key('id_guest');
        // $this->migration->dhonmigrate->create_table('force');

        // /*
        // | -------------------------------------------------------------------
        // |  Facilitations table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'facilitations';
        // $this->migration->dhonmigrate->ai()->field('id_facilitation', 'INT');
        // $this->migration->dhonmigrate->constraint('50')->field('fas_type', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('50')->field('fas_class', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('100')->field('fas_name', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('500')->field('fas_description', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('100')->field('fas_hour', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('100')->field('fas_photo', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->field('created_at', 'INT');
        // $this->migration->dhonmigrate->field('modified_at', 'INT');
        // $this->migration->dhonmigrate->add_key('id_facilitation');
        // $this->migration->dhonmigrate->create_table('force');

        // $this->migration->dhonmigrate->insert([
        //     'fas_type' => 'restoran', 
        //     'fas_class' => 'Hotel', 
        //     'fas_name' => 'Restoran', 
        //     'fas_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.', 
        //     'fas_hour' => '07:30 - 20:00', 
        //     'fas_photo' => 'tab_img_1.jpg',
        //     'created_at' => time()
        // ]);
        // $this->migration->dhonmigrate->insert([
        //     'fas_type' => 'bar', 
        //     'fas_class' => 'Hotel', 
        //     'fas_name' => 'Bar', 
        //     'fas_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.', 
        //     'fas_hour' => '07:30 - 20:00', 
        //     'fas_photo' => 'tab_img_2.jpg',
        //     'created_at' => time()
        // ]);
        // $this->migration->dhonmigrate->insert([
        //     'fas_type' => 'pickup', 
        //     'fas_class' => 'Hotel', 
        //     'fas_name' => 'Pick Up', 
        //     'fas_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.', 
        //     'fas_hour' => '07:30 - 20:00', 
        //     'fas_photo' => 'tab_img_3.jpg',
        //     'created_at' => time()
        // ]);
        // $this->migration->dhonmigrate->insert([
        //     'fas_type' => 'swimming', 
        //     'fas_class' => 'Hotel', 
        //     'fas_name' => 'Swimming Pool', 
        //     'fas_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.', 
        //     'fas_hour' => '07:30 - 20:00', 
        //     'fas_photo' => 'tab_img_4.jpg',
        //     'created_at' => time()
        // ]);
        // $this->migration->dhonmigrate->insert([
        //     'fas_type' => 'spa', 
        //     'fas_class' => 'Hotel', 
        //     'fas_name' => 'Spa', 
        //     'fas_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.', 
        //     'fas_hour' => '07:30 - 20:00', 
        //     'fas_photo' => 'tab_img_5.jpg',
        //     'created_at' => time()
        // ]);
        // $this->migration->dhonmigrate->insert([
        //     'fas_type' => 'gym', 
        //     'fas_class' => 'Hotel', 
        //     'fas_name' => 'Gym', 
        //     'fas_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.', 
        //     'fas_hour' => '07:30 - 20:00', 
        //     'fas_photo' => 'tab_img_6.jpg',
        //     'created_at' => time()
        // ]);

        /*
        | -------------------------------------------------------------------
        |  User table
        | -------------------------------------------------------------------
        */
        $this->migration->dhonmigrate->table = 'user_ci';
        $this->migration->dhonmigrate->ai()->field('id', 'INT');
        $this->migration->dhonmigrate->constraint('255')->unique()->field('email', 'VARCHAR');
        $this->migration->dhonmigrate->constraint('200')->field('fullName', 'VARCHAR');
        $this->migration->dhonmigrate->constraint('500')->field('address', 'VARCHAR');
        $this->migration->dhonmigrate->constraint('20')->field('phone', 'VARCHAR');
        $this->migration->dhonmigrate->constraint('32')->field('auth_key', 'VARCHAR');
        $this->migration->dhonmigrate->constraint('255')->field('password_hash', 'VARCHAR');
        $this->migration->dhonmigrate->constraint('255')->default(null)->field('password_reset_token', 'VARCHAR', 'nullable');
        $this->migration->dhonmigrate->constraint('6')->default('10')->field('status', 'smallint');
        $this->migration->dhonmigrate->field('created_at', 'INT');
        $this->migration->dhonmigrate->field('updated_at', 'INT');
        $this->migration->dhonmigrate->constraint('255')->default(null)->field('verification_token', 'VARCHAR', 'nullable');
        $this->migration->dhonmigrate->add_key('id');
        $this->migration->dhonmigrate->create_table('force');

        $this->migration->dhonmigrate->insert([
            'email' => 'contoh@email.com', 
            'fullName' => 'Tamu Hotel', 
            'address' => 'Jl. H. Holil', 
            'phone' => '87700889913', 
            'auth_key' => random_string('alnum', 32), 
            'password_hash' => password_hash('contoh', PASSWORD_DEFAULT),
            'created_at' => time()
        ]);

        // if ($this->dev == false) $this->_dev();
    }

    private function _dev()
    {
        $this->migration->dhonmigrate = new DhonMigrate($this->database.'_dev');
        $this->dev = true;
        $this->up();
    }

    public function change()
    {
    }

    public function drop()
    {
    }
}
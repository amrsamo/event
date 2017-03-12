<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if(!$this->isLoggedIn())
			redirect('/');

		$data = array();
		$data['users'] = $this->Adminuser->get(array("type !="=>6),null,5000,0);
		$data['user_type'] = $this->Usertype->get(null,null,5000,0);
		$this->load->view('admin/users',$data);
	}

	public function add()
	{
		// if(!$this->isLoggedIn())
		// 	redirect('/');

		$data = array();
		$data['country'] = $this->Country->get(null,null,5000,0);
		$data['city'] = $this->City->get(null,null,5000,0);
		$data['user_type'] = $this->Usertype->get(null,null,5000,0);
		

				if(isset($_POST['username']))
				{
					// printme($_POST);
					// exit();
					$username = $_POST['username'];
					$email = $_POST['email'];
					
						$password = $_POST['password'];
						$verify   = $_POST['verify'];
						
							// if($password == $verify)
							// {
								$usernameCheck = $this->Adminuser->get(array("username"=>$username));
								if(empty($usernameCheck))
								{
									//$emailCheck = $this->Adminuser->get(array("email"=>$email));
									// if(empty($emailCheck))
									// {
										// printme($_POST);exit();
										$process = $this->Adminuser->insert($_POST);
										if($process)
										{
											$data['success'] = 'User Created Successfully';
											$data['username']= $username;
										}
										else
											$data['error'] = 'Process failed, Please try again.';
									// }
									// else
									// {
									// 	$data['error'] = 'Email not available, Please Choose another one.';
									// }
									
								}
								else
								{
									$data['error'] = 'Username not available, Please Choose another one.';
								}
								

							// }
							// else
							// {
							// 	$data['error'] = 'Password is not verified correctly';
							// }
				}
				
		$this->load->view('admin/new_user',$data);
	}



	public function addtestusers()
	{	
		for ($i=0; $i < 1000 ; $i++) { 
			$this->addtestuser();
		}
	}

	public function addtestuser()
	{
		$names = array( 'Abbott', 'Acevedo', 'Acosta', 'Adams', 'Adkins', 'Aguilar', 'Aguirre', 'Albert', 'Alexander', 'Alford', 'Allen', 'Allison', 'Alston', 'Alvarado', 'Alvarez', 'Anderson', 'Andrews', 'Anthony', 'Armstrong', 'Arnold', 'Ashley', 'Atkins', 'Atkinson', 'Austin', 'Avery', 'Avila', 'Ayala', 'Ayers', 'Bailey', 'Baird', 'Baker', 'Baldwin', 'Ball', 'Ballard', 'Banks', 'Barber', 'Barker', 'Barlow', 'Barnes', 'Barnett', 'Barr', 'Barrera', 'Barrett', 'Barron', 'Barry', 'Bartlett', 'Barton', 'Bass', 'Bates', 'Battle', 'Bauer', 'Baxter', 'Beach', 'Bean', 'Beard', 'Beasley', 'Beck', 'Becker', 'Bell', 'Bender', 'Benjamin', 'Bennett', 'Benson', 'Bentley', 'Benton', 'Berg', 'Berger', 'Bernard', 'Berry', 'Best', 'Bird', 'Bishop', 'Black', 'Blackburn', 'Blackwell', 'Blair', 'Blake', 'Blanchard', 'Blankenship', 'Blevins', 'Bolton', 'Bond', 'Bonner', 'Booker', 'Boone', 'Booth', 'Bowen', 'Bowers', 'Bowman', 'Boyd', 'Boyer', 'Boyle', 'Bradford', 'Bradley', 'Bradshaw', 'Brady', 'Branch', 'Bray', 'Brennan', 'Brewer', 'Bridges', 'Briggs', 'Bright', 'Britt', 'Brock', 'Brooks', 'Brown', 'Browning', 'Bruce', 'Bryan', 'Bryant', 'Buchanan', 'Buck', 'Buckley', 'Buckner', 'Bullock', 'Burch', 'Burgess', 'Burke', 'Burks', 'Burnett', 'Burns', 'Burris', 'Burt', 'Burton', 'Bush', 'Butler', 'Byers', 'Byrd', 'Cabrera', 'Cain', 'Calderon', 'Caldwell', 'Calhoun', 'Callahan', 'Camacho', 'Cameron', 'Campbell', 'Campos', 'Cannon', 'Cantrell', 'Cantu', 'Cardenas', 'Carey', 'Carlson', 'Carney', 'Carpenter', 'Carr', 'Carrillo', 'Carroll', 'Carson', 'Carter', 'Carver', 'Case', 'Casey', 'Cash', 'Castaneda', 'Castillo', 'Castro', 'Cervantes', 'Chambers', 'Chan', 'Chandler', 'Chaney', 'Chang', 'Chapman', 'Charles', 'Chase', 'Chavez', 'Chen', 'Cherry', 'Christensen', 'Christian', 'Church', 'Clark', 'Clarke', 'Clay', 'Clayton', 'Clements', 'Clemons', 'Cleveland', 'Cline', 'Cobb', 'Cochran', 'Coffey', 'Cohen', 'Cole', 'Coleman', 'Collier', 'Collins', 'Colon', 'Combs', 'Compton', 'Conley', 'Conner', 'Conrad', 'Contreras', 'Conway', 'Cook', 'Cooke', 'Cooley', 'Cooper', 'Copeland', 'Cortez', 'Cote', 'Cotton', 'Cox', 'Craft', 'Craig', 'Crane', 'Crawford', 'Crosby', 'Cross', 'Cruz', 'Cummings', 'Cunningham', 'Curry', 'Curtis', 'Dale', 'Dalton', 'Daniel', 'Daniels', 'Daugherty', 'Davenport', 'David', 'Davidson', 'Davis', 'Dawson', 'Day', 'Dean', 'Decker', 'Dejesus', 'Delacruz', 'Delaney', 'Deleon', 'Delgado', 'Dennis', 'Diaz', 'Dickerson', 'Dickson', 'Dillard', 'Dillon', 'Dixon', 'Dodson', 'Dominguez', 'Donaldson', 'Donovan', 'Dorsey', 'Dotson', 'Douglas', 'Downs', 'Doyle', 'Drake', 'Dudley', 'Duffy', 'Duke', 'Duncan', 'Dunlap', 'Dunn', 'Duran', 'Durham', 'Dyer', 'Eaton', 'Edwards', 'Elliott', 'Ellis', 'Ellison', 'Emerson', 'England', 'English', 'Erickson', 'Espinoza', 'Estes', 'Estrada', 'Evans', 'Everett', 'Ewing', 'Farley', 'Farmer', 'Farrell', 'Faulkner', 'Ferguson', 'Fernandez', 'Ferrell', 'Fields', 'Figueroa', 'Finch', 'Finley', 'Fischer', 'Fisher', 'Fitzgerald', 'Fitzpatrick', 'Fleming', 'Fletcher', 'Flores', 'Flowers', 'Floyd', 'Flynn', 'Foley', 'Forbes', 'Ford', 'Foreman', 'Foster', 'Fowler', 'Fox', 'Francis', 'Franco', 'Frank', 'Franklin', 'Franks', 'Frazier', 'Frederick', 'Freeman', 'French', 'Frost', 'Fry', 'Frye', 'Fuentes', 'Fuller', 'Fulton', 'Gaines', 'Gallagher', 'Gallegos', 'Galloway', 'Gamble', 'Garcia', 'Gardner', 'Garner', 'Garrett', 'Garrison', 'Garza', 'Gates', 'Gay', 'Gentry', 'George', 'Gibbs', 'Gibson', 'Gilbert', 'Giles', 'Gill', 'Gillespie', 'Gilliam', 'Gilmore', 'Glass', 'Glenn', 'Glover', 'Goff', 'Golden', 'Gomez', 'Gonzales', 'Gonzalez', 'Good', 'Goodman', 'Goodwin', 'Gordon', 'Gould', 'Graham', 'Grant', 'Graves', 'Gray', 'Green', 'Greene', 'Greer', 'Gregory', 'Griffin', 'Griffith', 'Grimes', 'Gross', 'Guerra', 'Guerrero', 'Guthrie', 'Gutierrez', 'Guy', 'Guzman', 'Hahn', 'Hale', 'Haley', 'Hall', 'Hamilton', 'Hammond', 'Hampton', 'Hancock', 'Haney', 'Hansen', 'Hanson', 'Hardin', 'Harding', 'Hardy', 'Harmon', 'Harper', 'Harrell', 'Harrington', 'Harris', 'Harrison', 'Hart', 'Hartman', 'Harvey', 'Hatfield', 'Hawkins', 'Hayden', 'Hayes', 'Haynes', 'Hays', 'Head', 'Heath', 'Hebert', 'Henderson', 'Hendricks', 'Hendrix', 'Henry', 'Hensley', 'Henson', 'Herman', 'Hernandez', 'Herrera', 'Herring', 'Hess', 'Hester', 'Hewitt', 'Hickman', 'Hicks', 'Higgins', 'Hill', 'Hines', 'Hinton', 'Hobbs', 'Hodge', 'Hodges', 'Hoffman', 'Hogan', 'Holcomb', 'Holden', 'Holder', 'Holland', 'Holloway', 'Holman', 'Holmes', 'Holt', 'Hood', 'Hooper', 'Hoover', 'Hopkins', 'Hopper', 'Horn', 'Horne', 'Horton', 'House', 'Houston', 'Howard', 'Howe', 'Howell', 'Hubbard', 'Huber', 'Hudson', 'Huff', 'Huffman', 'Hughes', 'Hull', 'Humphrey', 'Hunt', 'Hunter', 'Hurley', 'Hurst', 'Hutchinson', 'Hyde', 'Ingram', 'Irwin', 'Jackson', 'Jacobs', 'Jacobson', 'James', 'Jarvis', 'Jefferson', 'Jenkins', 'Jennings', 'Jensen', 'Jimenez', 'Johns', 'Johnson', 'Johnston', 'Jones', 'Jordan', 'Joseph', 'Joyce', 'Joyner', 'Juarez', 'Justice', 'Kane', 'Kaufman', 'Keith', 'Keller', 'Kelley', 'Kelly', 'Kemp', 'Kennedy', 'Kent', 'Kerr', 'Key', 'Kidd', 'Kim', 'King', 'Kinney', 'Kirby', 'Kirk', 'Kirkland', 'Klein', 'Kline', 'Knapp', 'Knight', 'Knowles', 'Knox', 'Koch', 'Kramer', 'Lamb', 'Lambert', 'Lancaster', 'Landry', 'Lane', 'Lang', 'Langley', 'Lara', 'Larsen', 'Larson', 'Lawrence', 'Lawson', 'Le', 'Leach', 'Leblanc', 'Lee', 'Leon', 'Leonard', 'Lester', 'Levine', 'Levy', 'Lewis', 'Lindsay', 'Lindsey', 'Little', 'Livingston', 'Lloyd', 'Logan', 'Long', 'Lopez', 'Lott', 'Love', 'Lowe', 'Lowery', 'Lucas', 'Luna', 'Lynch', 'Lynn', 'Lyons', 'Macdonald', 'Macias', 'Mack', 'Madden', 'Maddox', 'Maldonado', 'Malone', 'Mann', 'Manning', 'Marks', 'Marquez', 'Marsh', 'Marshall', 'Martin', 'Martinez', 'Mason', 'Massey', 'Mathews', 'Mathis', 'Matthews', 'Maxwell', 'May', 'Mayer', 'Maynard', 'Mayo', 'Mays', 'Mcbride', 'Mccall', 'Mccarthy', 'Mccarty', 'Mcclain', 'Mcclure', 'Mcconnell', 'Mccormick', 'Mccoy', 'Mccray', 'Mccullough', 'Mcdaniel', 'Mcdonald', 'Mcdowell', 'Mcfadden', 'Mcfarland', 'Mcgee', 'Mcgowan', 'Mcguire', 'Mcintosh', 'Mcintyre', 'Mckay', 'Mckee', 'Mckenzie', 'Mckinney', 'Mcknight', 'Mclaughlin', 'Mclean', 'Mcleod', 'Mcmahon', 'Mcmillan', 'Mcneil', 'Mcpherson', 'Meadows', 'Medina', 'Mejia', 'Melendez', 'Melton', 'Mendez', 'Mendoza', 'Mercado', 'Mercer', 'Merrill', 'Merritt', 'Meyer', 'Meyers', 'Michael', 'Middleton', 'Miles', 'Miller', 'Mills', 'Miranda', 'Mitchell', 'Molina', 'Monroe', 'Montgomery', 'Montoya', 'Moody', 'Moon', 'Mooney', 'Moore', 'Morales', 'Moran', 'Moreno', 'Morgan', 'Morin', 'Morris', 'Morrison', 'Morrow', 'Morse', 'Morton', 'Moses', 'Mosley', 'Moss', 'Mueller', 'Mullen', 'Mullins', 'Munoz', 'Murphy', 'Murray', 'Myers', 'Nash', 'Navarro', 'Neal', 'Nelson', 'Newman', 'Newton', 'Nguyen', 'Nichols', 'Nicholson', 'Nielsen', 'Nieves', 'Nixon', 'Noble', 'Noel', 'Nolan', 'Norman', 'Norris', 'Norton', 'Nunez', 'Obrien', 'Ochoa', 'Oconnor', 'Odom', 'Odonnell', 'Oliver', 'Olsen', 'Olson', 'Oneal', 'Oneil', 'Oneill', 'Orr', 'Ortega', 'Ortiz', 'Osborn', 'Osborne', 'Owen', 'Owens', 'Pace', 'Pacheco', 'Padilla', 'Page', 'Palmer', 'Park', 'Parker', 'Parks', 'Parrish', 'Parsons', 'Pate', 'Patel', 'Patrick', 'Patterson', 'Patton', 'Paul', 'Payne', 'Pearson', 'Peck', 'Pena', 'Pennington', 'Perez', 'Perkins', 'Perry', 'Peters', 'Petersen', 'Peterson', 'Petty', 'Phelps', 'Phillips', 'Pickett', 'Pierce', 'Pittman', 'Pitts', 'Pollard', 'Poole', 'Pope', 'Porter', 'Potter', 'Potts', 'Powell', 'Powers', 'Pratt', 'Preston', 'Price', 'Prince', 'Pruitt', 'Puckett', 'Pugh', 'Quinn', 'Ramirez', 'Ramos', 'Ramsey', 'Randall', 'Randolph', 'Rasmussen', 'Ratliff', 'Ray', 'Raymond', 'Reed', 'Reese', 'Reeves', 'Reid', 'Reilly', 'Reyes', 'Reynolds', 'Rhodes', 'Rice', 'Rich', 'Richard', 'Richards', 'Richardson', 'Richmond', 'Riddle', 'Riggs', 'Riley', 'Rios', 'Rivas', 'Rivera', 'Rivers', 'Roach', 'Robbins', 'Roberson', 'Roberts', 'Robertson', 'Robinson', 'Robles', 'Rocha', 'Rodgers', 'Rodriguez', 'Rodriquez', 'Rogers', 'Rojas', 'Rollins', 'Roman', 'Romero', 'Rosa', 'Rosales', 'Rosario', 'Rose', 'Ross', 'Roth', 'Rowe', 'Rowland', 'Roy', 'Ruiz', 'Rush', 'Russell', 'Russo', 'Rutledge', 'Ryan', 'Salas', 'Salazar', 'Salinas', 'Sampson', 'Sanchez', 'Sanders', 'Sandoval', 'Sanford', 'Santana', 'Santiago', 'Santos', 'Sargent', 'Saunders', 'Savage', 'Sawyer', 'Schmidt', 'Schneider', 'Schroeder', 'Schultz', 'Schwartz', 'Scott', 'Sears', 'Sellers', 'Serrano', 'Sexton', 'Shaffer', 'Shannon', 'Sharp', 'Sharpe', 'Shaw', 'Shelton', 'Shepard', 'Shepherd', 'Sheppard', 'Sherman', 'Shields', 'Short', 'Silva', 'Simmons', 'Simon', 'Simpson', 'Sims', 'Singleton', 'Skinner', 'Slater', 'Sloan', 'Small', 'Smith', 'Snider', 'Snow', 'Snyder', 'Solis', 'Solomon', 'Sosa', 'Soto', 'Sparks', 'Spears', 'Spence', 'Spencer', 'Stafford', 'Stanley', 'Stanton', 'Stark', 'Steele', 'Stein', 'Stephens', 'Stephenson', 'Stevens', 'Stevenson', 'Stewart', 'Stokes', 'Stone', 'Stout', 'Strickland', 'Strong', 'Stuart', 'Suarez', 'Sullivan', 'Summers', 'Sutton', 'Swanson', 'Sweeney', 'Sweet', 'Sykes', 'Talley', 'Tanner', 'Tate', 'Taylor', 'Terrell', 'Terry', 'Thomas', 'Thompson', 'Thornton', 'Tillman', 'Todd', 'Torres', 'Townsend', 'Tran', 'Travis', 'Trevino', 'Trujillo', 'Tucker', 'Turner', 'Tyler', 'Tyson', 'Underwood', 'Valdez', 'Valencia', 'Valentine', 'Valenzuela', 'Vance', 'Vang', 'Vargas', 'Vasquez', 'Vaughan', 'Vaughn', 'Vazquez', 'Vega', 'Velasquez', 'Velazquez', 'Velez', 'Villarreal', 'Vincent', 'Vinson', 'Wade', 'Wagner', 'Walker', 'Wall', 'Wallace', 'Waller', 'Walls', 'Walsh', 'Walter', 'Walters', 'Walton', 'Ward', 'Ware', 'Warner', 'Warren', 'Washington', 'Waters', 'Watkins', 'Watson', 'Watts', 'Weaver', 'Webb', 'Weber', 'Webster', 'Weeks', 'Weiss', 'Welch', 'Wells', 'West', 'Wheeler', 'Whitaker', 'White', 'Whitehead', 'Whitfield', 'Whitley', 'Whitney', 'Wiggins', 'Wilcox', 'Wilder', 'Wiley', 'Wilkerson', 'Wilkins', 'Wilkinson', 'William', 'Williams', 'Williamson', 'Willis', 'Wilson', 'Winters', 'Wise', 'Witt', 'Wolf', 'Wolfe', 'Wong', 'Wood', 'Woodard', 'Woods', 'Woodward', 'Wooten', 'Workman', 'Wright', 'Wyatt', 'Wynn', 'Yang', 'Yates', 'York', 'Young', 'Zamora', 'Zimmerman');



		$titles = array('Lorem ipsum dolor sit amet','consectetur adipiscing elit','Quibus ego vehementer assentior','Duo Reges: constructio interrete','Lorem ipsum dolor si');



		$content = file_get_contents('http://loripsum.net/api/10/plaintext');
		


		// Add USER
		$data = array();
		$data['first_name'] = $names[array_rand($names)];
		$data['last_name'] = $names[array_rand($names)];
		$data['username'] = $data['first_name'].'_'.$data['last_name'];
		$data['email'] = $data['first_name'].'_'.$data['last_name'].'_'.rand(1,100).'@gmail.com';
		$data['city'] = 1;
		$data['password'] = '';
		$data['random_key'] = '';
		$data['country'] = 62;
		$data['is_valid'] = 1;
		$data['type'] = rand(1,19);
		$data['address'] = substr($content,0,rand(20,100));
		$data['bio'] = substr($content,0,rand(20,400));
		$data['website'] = 'http://www.'.$data['first_name'].'-'.$data['last_name'].'.com';

		
		$process = $this->Adminuser->put($data);
		$user_id = $this->db->insert_id();

		// ADD PROFILE PICTURE
		$data = array();
		$data['user_id'] =  $user_id;
		$data['source_url'] = 'public/media/profiles/'.rand(1,30).'.jpg';
		$data['is_valid'] = 1;
		$this->Profilepicture->put($data);


		// ADD USER MEDIA
		for ($i=0; $i < 30; $i++) { 
			$data = array();
			$data['user_id'] =  $user_id;
			$data['source_url'] = 'public/media/images/'.rand(1,120).'.jpg';
			$data['is_valid'] = 1;
			$data['album_id'] = 0;
			$data['title'] = substr($content,0,rand(20,80));
			$data['description'] = substr($content,0,rand(20,220));
			$this->Media->put($data);
		}
		

		// ADD USER CONTACT
		for ($i=1; $i < 6 ; $i++) { 
			$data = array();
			$data['user_id'] =  $user_id;
			$data['contact_id'] = $i;
			$a = '';
			for ($x = 0; $x<12; $x++) 
			{
			    $a .= mt_rand(0,9);
			}
			$data['value'] = $a;
			$this->User_Contact->put($data);
		}
		


		// ADD USER SOCIAL
		for ($i=1; $i < 6 ; $i++) { 
			$data = array();
			$data['user_id'] =  $user_id;
			$data['social_id'] = $i;
			$data['link'] = '';
			$this->User_Social->put($data);
		}
	}

	public function profile()
	{
		if(!$this->isLoggedIn())
			redirect('/');


			$data['user'] = $this->session->userdata['admin'];
			$this->load->view('admin/profile',$data);
	}


	public function userprofile($username)
	{
		if(!$this->isLoggedIn())
			redirect('/');

			$username = urldecode($username);
			$data = array();
			$data['country'] = $this->Country->get(null,null,5000,0);
			$data['city'] = $this->City->get(null,null,5000,0);
			$data['user_type'] = $this->Usertype->get(null,null,5000,0);
			$data['social_network'] = $this->Socialnetwork->get(null,null,5000,0);
			$data['contact_numbers_type'] = $this->Contactnumbertype->get(null,null,5000,0);
			
			$user = $this->Adminuser->get(array("username"=>$username));
			$user = $user[0];

			

			//GET THE USER CONTACT NUMBERS
			$user_contacts =$this->User_Contact->getUserContacts($user->id);
			if(!empty($user_contacts))
			{
				$data['user_contacts'] =$this->User_Contact->getUserContacts($user->id);
			}



			//GET THE USER MEDIA
			$user_media =$this->Media->get(array('user_id'=>$user->id));
			
			if(!empty($user_media))
			{
				$data['user_media'] = $user_media;
			}



			// Check the user profile picture
			$profile_picture = $this->Profilepicture->get(array('user_id'=>$user->id),null,5000,0);
			if(empty($profile_picture))
				$user->profile_picture = base_url().'public/images/usernotfound.jpg';
			else
				$user->profile_picture = base_url().$profile_picture[0]->source_url;


			


			//Get User Social Networks
			$user_social = $this->User_Social->get(array('user_id'=>$user->id),null,5000,0);
			$data['user_social'] = array();
			if(!empty($user_social))
			{	
				foreach ($user_social as $x) {
					$data['user_social'][$x->social_id] = $x->link;
				}
				
			}

			//Edit Form Handler
			if(isset($_POST['username']))
			{	

				$flag = true;
				if($user->username !== trim($_POST['username']))
				{	
					$usernameCheck = $this->Adminuser->get(array("username"=>$_POST['username']));
					if(!empty($usernameCheck))
					{	
						$data['error'] = 'Username not available, Please Choose another one.';
						$flag = false;
					}
				}

				if($user->email != $_POST['email'] && $flag)
				{
					// Email has been changed
					$emailCheck = $this->Adminuser->get(array("email"=>$_POST['email']));
					if(!empty($emailCheck))
					{	
						$data['error'] = 'Email not available, Please Choose another one.';
						$flag = false;
					}
				}

				if($flag)
				{	
					$this->Adminuser->update($_POST,array('id'=>$user->id));
					redirect(base_url().'admin/user/'.$_POST['username']);
				}
			}

			// printme($user);
			$data['user'] = $user;
			$data['uploadscripts'] = true;

			$this->session->set_userdata('uploadid', $user->id.'test');
			$this->load->view('admin/userprofile',$data);
	}


	public function media($username)
	{	
		$username = urldecode($username);
		$user = $this->Adminuser->get(array("username"=>$username));
		$user = $user[0];
		$data = array();

		//GET THE USER MEDIA
		$user_media =$this->Media->get(array('user_id'=>$user->id));
		
		if(!empty($user_media))
		{
			$data['user_media'] = $user_media;
		}


		$data['user'] = $user;
		$data['uploadscripts'] = true;

		$this->load->view('admin/usermedia',$data);
	}

	public function updatemedia($media_id)
	{
		$process = $this->Media->update(array('title'=>$_GET['title'],'description'=>$_GET['description']),array('id'=>$media_id));

		print json_encode( array('success' => true, 'message' => "Values updated." ) );

	}

	public function deletemedia($media_id)
	{
		$process = $this->Media->delete(array('id'=>$media_id));
		print json_encode( array('success' => true, 'message' => "Values updated." ) );
	}

	public function uservalidate($username)
	{	
		$process = $this->Adminuser->update(array('is_valid'=>1),array('username'=>$username));
		redirect(base_url().'admin/user/'.$username);
	}


	public function userdelete($username)
	{	

		$data = array();
		$data['user'] = $this->Adminuser->get(array("username"=>$username));
		$data['user'] = $data['user'][0];
		$this->load->view('admin/deleteuser',$data);
	}

	public function confirmuserdelete($username)
	{	
		$process = $this->Adminuser->delete(array('username'=>$username));
		redirect(base_url().'admin/users');
	}

	public function socialform($user_id)
	{
		if(!empty($_POST))
		{
			foreach ($_POST as $id => $value) {
				if($value !== '')
				{
					$data = array();
					$data['user_id'] = $user_id;
					$data['social_id'] = $id;
					$data['link'] = $value;

					$check = $this->User_Social->get(array('user_id'=>$user_id,'social_id'=>$id));
					if(!empty($check))
						$this->User_Social->update($data,array('user_id'=>$user_id,'social_id'=>$id));
					else
						$this->User_Social->put($data);
				}
				
			}
			
			print json_encode( array('success' => true, 'message' => "Values updated." ) );
		}
		else
		{
			print json_encode( array('success' => false, 'message' => "Please enter new values." ) );
		}
	}

	public function contactform($user_id)
	{
		$this->Adminuser->update(
				array(
						"website"=>$_POST['website'],
						"address"=>$_POST['address']
					),
				array("id"=>$user_id)
				);
		
		$_POST['contact_numbers'] = trim($_POST['contact_numbers']);
		$_POST['contact_numbers'] = json_decode($_POST['contact_numbers']);
		
		if(is_array($_POST['contact_numbers']))
		{
			foreach ($_POST['contact_numbers'] as $x) {
				$data = array();
				$data['user_id']    = $user_id;
				$data['contact_id'] = $x->type;
				$data['value']      = $x->value;
				$process = $this->User_Contact->put($data);
			}
		}

		print json_encode( array('success' => true, 'message' => "Values updated." ) );
	}

	public function settings()
	{
		if(!$this->isLoggedIn())
			redirect('/');

			$data = array();
			$data['user'] = $this->session->userdata['admin'];

			if(isset($_POST['password']))
			{
				$password = $_POST['password'];
				$verify   = $_POST['verify'];

				if($password == $verify)
				{	
					$process = $this->Adminuser->changePassword($data['user']['user_id'],$password,$data['user']['random_key']);
					if($process)
						$data['success'] = 'Password changed successfully.';
					else
						$data['error'] = 'Process failed, Please try again.';
				}
				else
				{
					$data['error'] = 'Password is not verified correctly.';
				}
			}

			$this->load->view('admin/settings',$data);
	}

	public function delete()
	{
		if(!$this->isLoggedIn())
			redirect('/');

		$process = $this->Adminuser->delete(array("user_id"=>$this->session->userdata['user_id']));
		redirect('logout');
	}

	public function isLoggedIn()
	{
		if(isset($this->session->userdata['admin']))
			return true;
		return false;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
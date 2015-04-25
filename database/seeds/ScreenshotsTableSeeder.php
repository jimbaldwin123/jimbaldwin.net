<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ScreenshotsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// DB::table('screenshots')->delete();
		$screenshots = array(
			['id'=>1,'title'=>'SPACE.com Home Page','large_image'=>'space_hp_NatGeo_reskin.jpg','thumb_image'=>'space_hp_NatGeo_reskin-th.jpg'],
			['id'=>2,'title'=>'Newsarama Home Page','large_image'=>'newsarama.jpg','thumb_image'=>'newsarama-th.jpg'],
			['id'=>3,'title'=>'LiveScience Article Page','large_image'=>'healthination_sidebar.jpg','thumb_image'=>'healthination_sidebar-th.jpg']
		);
		DB::table('screenshots')->insert($screenshots);
	}

}

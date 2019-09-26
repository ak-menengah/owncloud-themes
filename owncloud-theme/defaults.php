 <?php
    /**
    * See lib/private/defaults.php for a list of possible defaults
    */
 class OC_Theme {
    public function getName() {
		/* short name, used when referring to the software
		* @return string
		*/
		return ' ';
    }
	public function getTitle() {
		/* can be a longer name, for titles
		* @return string
		*/
		return 'Owncloud - Lab. Akuntansi Menengah';
    }
    public function getEntity() {
		/* e.g. company name, used for footers and copyright notices
		* @return string
		*/
		return 'Lab. Akuntansi Menengah Universitas Gunadarma';
    }    
    public function getSlogan() {
		/* e.g. Strapline, used for footers and copyright notices
		* @return string
		*/
		return '2019';
    }
    public function getBaseUrl() {
		/**
		* get base URL for the organisation behind your ownCloud instance
		* @return string
		*/
		return 'http://www.gunadarma.ac.id';
    }
}


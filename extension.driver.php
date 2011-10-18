<?php

	Class Extension_Alerts extends Extension {

		public function about() {
			return array(
				'name' => 'Alerts',
				'version' => '1.0',
				'release-date' => '2011-10-02',
				'author' => array(
					'name' => 'Nils Werner',
					'website' => 'http://symphony-cms.com/',
					'email' => 'team@symphony-cms.com'
				),
				'description' => 'Adds pointless alerts.'
			);
		}

		public function getSubscribedDelegates() {
			return array(
				array(
					'page' => '/backend/',
					'delegate' => 'AppendPageAlert',
					'callback' => '__appendAlert'
				),
			);
		}

		public function __appendAlert($context) {
			Administration::instance()->Page->pageAlert("This is a notice",Alert::NOTICE);
			Administration::instance()->Page->pageAlert("This is a notice",Alert::NOTICE);
			Administration::instance()->Page->pageAlert("This is an error",Alert::ERROR);
			Administration::instance()->Page->pageAlert("This is a notice",Alert::NOTICE);
			Administration::instance()->Page->pageAlert("This is a success",Alert::SUCCESS);
			Administration::instance()->Page->pageAlert("This is an error",Alert::ERROR);
			Administration::instance()->Page->pageAlert("This is a success",Alert::SUCCESS);
			Administration::instance()->Page->pageAlert("This is a success",Alert::SUCCESS);
			Administration::instance()->Page->pageAlert("This is an error",Alert::ERROR);
			Administration::instance()->Page->pageAlert("This is a success",Alert::SUCCESS);
			Administration::instance()->Page->pageAlert("This is a success",Alert::SUCCESS);
		}

	}

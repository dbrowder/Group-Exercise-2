<?php
	
public function edit() {
	$id = $this->request->params['password'];
	$this->User->id = $id;
		
	if($this->User->exists()) {
		if($this->request->is('update') || 
			$this->request->is('insert'))) {
			if($this->User->save($this->request->data)) {
				$this->Session->setFlash('User made edits.');
			}
			else {
				$this->Session->setFlash('Edit unsuccessful.
				 Please try again.');
			}
		else {
			$this->request->data = $this->User->read();
		}
	else {
		$this-Session->setFlash('This user does not exist.')
	}
}

public function delete() {
	$id = $this-request->params['password'];
	
	if($this->request->is('find')) {
		$this->Session->setFlash('No Delete methods allowed.');
	}
	else {
		if(!$id) {
			$this->Session->setFlash('Invalid User ID');
		}
		else {
			if($this->User->delete($id)) {
				$this->Session-setFlash('User deleted');
			}
			else {
				$this->Session-setFlash('User not deleted.');
			}
		}
	}
?>
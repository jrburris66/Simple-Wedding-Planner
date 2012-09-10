<?php
App::uses('AppController', 'Controller');
/**
 * Families Controller
 *
 * @property Family $Family
 */
class FamiliesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Family->recursive = 0;
		$this->set('families', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Family->id = $id;
		if (!$this->Family->exists()) {
			throw new NotFoundException(__('Invalid family'));
		}
		$this->set('family', $this->Family->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Family->create();
			if ($this->Family->save($this->request->data)) {
				$this->Session->setFlash(__('The family has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
			}
		}
		$contracts = $this->Family->Contract->find('list');
		$relationships = $this->Family->Relationship->find('list');
		$this->set(compact('contracts', 'relationships'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Family->id = $id;
		if (!$this->Family->exists()) {
			throw new NotFoundException(__('Invalid family'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Family->save($this->request->data)) {
				$this->Session->setFlash(__('The family has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The family could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Family->read(null, $id);
		}
		$contracts = $this->Family->Contract->find('list');
		$relationships = $this->Family->Relationship->find('list');
		$this->set(compact('contracts', 'relationships'));
		
		//$this->Contact->flatten = false;
		//$this->Contact->recursive = 1;
		// $contact = $this->Contact->find('name', array('conditions' => $contact_id));
		//$this->set('contact', $this->Contact->find('name', array('conditions' => $contact_id)));
		
		
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Family->id = $id;
		if (!$this->Family->exists()) {
			throw new NotFoundException(__('Invalid family'));
		}
		if ($this->Family->delete()) {
			$this->Session->setFlash(__('Family deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Family was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function contact_lookup($contact_id){
 		$this->Contact->flatten = false;
  		$this->Contact->recursive = 1;
  		// $contact = $this->Contact->find('name', array('conditions' => $contact_id));
  		$this->set('contact', $this->Contact->find('name', array('conditions' => $contact_id)));
  		
		
	
	}
	
}

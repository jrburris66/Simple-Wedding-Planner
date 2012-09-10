<?php
App::uses('AppController', 'Controller');
/**
 * Relationships Controller
 *
 * @property Relationship $Relationship
 */
class RelationshipsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Relationship->recursive = 0;
		$this->set('relationships', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Relationship->id = $id;
		if (!$this->Relationship->exists()) {
			throw new NotFoundException(__('Invalid relationship'));
		}
		$this->set('relationship', $this->Relationship->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Relationship->create();
			if ($this->Relationship->save($this->request->data)) {
				$this->Session->setFlash(__('The relationship has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationship could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Relationship->id = $id;
		if (!$this->Relationship->exists()) {
			throw new NotFoundException(__('Invalid relationship'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Relationship->save($this->request->data)) {
				$this->Session->setFlash(__('The relationship has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The relationship could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Relationship->read(null, $id);
		}
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
		$this->Relationship->id = $id;
		if (!$this->Relationship->exists()) {
			throw new NotFoundException(__('Invalid relationship'));
		}
		if ($this->Relationship->delete()) {
			$this->Session->setFlash(__('Relationship deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Relationship was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

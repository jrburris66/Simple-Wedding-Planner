<?php
App::uses('AppController', 'Controller');
/**
 * Leads Controller
 *
 * @property Lead $Lead
 */
class LeadsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lead->recursive = 0;
		$this->set('leads', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Lead->id = $id;
		if (!$this->Lead->exists()) {
			throw new NotFoundException(__('Invalid lead'));
		}
		$this->set('lead', $this->Lead->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lead->create();
			if ($this->Lead->save($this->request->data)) {
				$this->Session->setFlash(__('The lead has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.'));
			}
		}
		$statuses = $this->Lead->Status->find('list');
		//$title2s = $this->Lead->Title2->find('list');
		//$this->set(compact('titles', 'title2s'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Lead->id = $id;
		if (!$this->Lead->exists()) {
			throw new NotFoundException(__('Invalid lead'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lead->save($this->request->data)) {
				$this->Session->setFlash(__('The lead has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lead could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Lead->read(null, $id);
		}
		$statuses = $this->Lead->Status->find('list');
		// $title2s = $this->Lead->Title2->find('list');
		 $this->set(compact('statuses'));
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
		$this->Lead->id = $id;
		if (!$this->Lead->exists()) {
			throw new NotFoundException(__('Invalid lead'));
		}
		if ($this->Lead->delete()) {
			$this->Session->setFlash(__('Lead deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lead was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

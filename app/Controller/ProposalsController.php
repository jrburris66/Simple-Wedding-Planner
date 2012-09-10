<?php
App::uses('AppController', 'Controller');
/**
 * Proposals Controller
 *
 * @property Proposal $Proposal
 */
class ProposalsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proposal->recursive = 0;
		$this->set('proposals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Proposal->id = $id;
		if (!$this->Proposal->exists()) {
			throw new NotFoundException(__('Invalid proposal'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proposal->create();
			if ($this->Proposal->save($this->request->data)) {
				$this->Session->setFlash(__('The proposal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.'));
			}
		}
		$titles = $this->Proposal->Title->find('list');
		$title2s = $this->Proposal->Title2->find('list');
		$this->set(compact('titles', 'title2s'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Proposal->id = $id;
		if (!$this->Proposal->exists()) {
			throw new NotFoundException(__('Invalid proposal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Proposal->save($this->request->data)) {
				$this->Session->setFlash(__('The proposal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Proposal->read(null, $id);
		}
		$titles = $this->Proposal->Title->find('list');
		$title2s = $this->Proposal->Title2->find('list');
		$this->set(compact('titles', 'title2s'));
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
		$this->Proposal->id = $id;
		if (!$this->Proposal->exists()) {
			throw new NotFoundException(__('Invalid proposal'));
		}
		if ($this->Proposal->delete()) {
			$this->Session->setFlash(__('Proposal deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Proposal was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

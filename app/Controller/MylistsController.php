<?php
App::uses('AppController', 'Controller');
/**
 * Mylists Controller
 *
 * @property Mylist $Mylist
 */
class MylistsController extends AppController {


	
/**
 * index method
 *
 * @return void
 */
	public function index() {
	
		 $this->Mylist->recursive = 0;
		 $this->set('mylists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Mylist->id = $id;
		if (!$this->Mylist->exists()) {
			throw new NotFoundException(__('Invalid mylist'));
		}
		$this->set('mylist', $this->Mylist->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mylist->create();
			if ($this->Mylist->save($this->request->data)) {
				$this->Session->setFlash(__('The mylist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mylist could not be saved. Please, try again.'));
			}
		}
		$titles = $this->Mylist->Title->find('list');
		$title2s = $this->Mylist->Title2->find('list');
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
		$this->Mylist->id = $id;
		if (!$this->Mylist->exists()) {
			throw new NotFoundException(__('Invalid mylist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mylist->save($this->request->data)) {
				$this->Session->setFlash(__('The mylist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mylist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Mylist->read(null, $id);
		}
		$titles = $this->Mylist->Title->find('list');
		$title2s = $this->Mylist->Title2->find('list');
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
		$this->Mylist->id = $id;
		if (!$this->Mylist->exists()) {
			throw new NotFoundException(__('Invalid mylist'));
		}
		if ($this->Mylist->delete()) {
			$this->Session->setFlash(__('Mylist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mylist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
class TransactionClient extends PayjunctionClient
{
    public function __construct($options)
    {
        parent::__construct();
        $this->generateClient($options);

    }

    /**
     * @description create a new transaction
     * @param $params
     * @return array|mixed
     */
    public function create($params)
    {
        return $this->post('/transactions',$params);
    }

    /**
     * @description read from an existing transaction
     * @param $id
     * @return array|mixed
     */
    public function read($id)
    {
        return $this->get('/transactions/'.$id);

    }

    /**
     * @description update an existing transaction
     * @param $id
     * @param null $params
     * @return array|mixed
     */
    public function update($id, $params = null)
    {
        return $this->put('/transactions/'.$id, $params);

    }

    /**
     * @todo this does not appear to be working 405 Method Not Allowed
     * @description add a signature to an existing transaction
     * @param $id
     * @param $params
     * @return array|mixed
     */
    public function addSignature($id, $params)
    {
        return $this->post('/transactions/'.$id.'/signature/capture',$params);

    }

}
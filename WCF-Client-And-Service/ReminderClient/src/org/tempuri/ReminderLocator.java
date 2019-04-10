/**
 * ReminderLocator.java
 *
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package org.tempuri;

public class ReminderLocator extends org.apache.axis.client.Service implements org.tempuri.Reminder {

    public ReminderLocator() {
    }


    public ReminderLocator(org.apache.axis.EngineConfiguration config) {
        super(config);
    }

    public ReminderLocator(java.lang.String wsdlLoc, javax.xml.namespace.QName sName) throws javax.xml.rpc.ServiceException {
        super(wsdlLoc, sName);
    }

    // Use to get a proxy class for BasicHttpBinding_IReminder
    private java.lang.String BasicHttpBinding_IReminder_address = "http://localhost:8080/Reminder";

    public java.lang.String getBasicHttpBinding_IReminderAddress() {
        return BasicHttpBinding_IReminder_address;
    }

    // The WSDD service name defaults to the port name.
    private java.lang.String BasicHttpBinding_IReminderWSDDServiceName = "BasicHttpBinding_IReminder";

    public java.lang.String getBasicHttpBinding_IReminderWSDDServiceName() {
        return BasicHttpBinding_IReminderWSDDServiceName;
    }

    public void setBasicHttpBinding_IReminderWSDDServiceName(java.lang.String name) {
        BasicHttpBinding_IReminderWSDDServiceName = name;
    }

    public org.tempuri.IReminder getBasicHttpBinding_IReminder() throws javax.xml.rpc.ServiceException {
       java.net.URL endpoint;
        try {
            endpoint = new java.net.URL(BasicHttpBinding_IReminder_address);
        }
        catch (java.net.MalformedURLException e) {
            throw new javax.xml.rpc.ServiceException(e);
        }
        return getBasicHttpBinding_IReminder(endpoint);
    }

    public org.tempuri.IReminder getBasicHttpBinding_IReminder(java.net.URL portAddress) throws javax.xml.rpc.ServiceException {
        try {
            org.tempuri.BasicHttpBinding_IReminderStub _stub = new org.tempuri.BasicHttpBinding_IReminderStub(portAddress, this);
            _stub.setPortName(getBasicHttpBinding_IReminderWSDDServiceName());
            return _stub;
        }
        catch (org.apache.axis.AxisFault e) {
            return null;
        }
    }

    public void setBasicHttpBinding_IReminderEndpointAddress(java.lang.String address) {
        BasicHttpBinding_IReminder_address = address;
    }

    /**
     * For the given interface, get the stub implementation.
     * If this service has no port for the given interface,
     * then ServiceException is thrown.
     */
    public java.rmi.Remote getPort(Class serviceEndpointInterface) throws javax.xml.rpc.ServiceException {
        try {
            if (org.tempuri.IReminder.class.isAssignableFrom(serviceEndpointInterface)) {
                org.tempuri.BasicHttpBinding_IReminderStub _stub = new org.tempuri.BasicHttpBinding_IReminderStub(new java.net.URL(BasicHttpBinding_IReminder_address), this);
                _stub.setPortName(getBasicHttpBinding_IReminderWSDDServiceName());
                return _stub;
            }
        }
        catch (java.lang.Throwable t) {
            throw new javax.xml.rpc.ServiceException(t);
        }
        throw new javax.xml.rpc.ServiceException("There is no stub implementation for the interface:  " + (serviceEndpointInterface == null ? "null" : serviceEndpointInterface.getName()));
    }

    /**
     * For the given interface, get the stub implementation.
     * If this service has no port for the given interface,
     * then ServiceException is thrown.
     */
    public java.rmi.Remote getPort(javax.xml.namespace.QName portName, Class serviceEndpointInterface) throws javax.xml.rpc.ServiceException {
        if (portName == null) {
            return getPort(serviceEndpointInterface);
        }
        java.lang.String inputPortName = portName.getLocalPart();
        if ("BasicHttpBinding_IReminder".equals(inputPortName)) {
            return getBasicHttpBinding_IReminder();
        }
        else  {
            java.rmi.Remote _stub = getPort(serviceEndpointInterface);
            ((org.apache.axis.client.Stub) _stub).setPortName(portName);
            return _stub;
        }
    }

    public javax.xml.namespace.QName getServiceName() {
        return new javax.xml.namespace.QName("http://tempuri.org/", "Reminder");
    }

    private java.util.HashSet ports = null;

    public java.util.Iterator getPorts() {
        if (ports == null) {
            ports = new java.util.HashSet();
            ports.add(new javax.xml.namespace.QName("http://tempuri.org/", "BasicHttpBinding_IReminder"));
        }
        return ports.iterator();
    }

    /**
    * Set the endpoint address for the specified port name.
    */
    public void setEndpointAddress(java.lang.String portName, java.lang.String address) throws javax.xml.rpc.ServiceException {
        
if ("BasicHttpBinding_IReminder".equals(portName)) {
            setBasicHttpBinding_IReminderEndpointAddress(address);
        }
        else 
{ // Unknown Port Name
            throw new javax.xml.rpc.ServiceException(" Cannot set Endpoint Address for Unknown Port" + portName);
        }
    }

    /**
    * Set the endpoint address for the specified port name.
    */
    public void setEndpointAddress(javax.xml.namespace.QName portName, java.lang.String address) throws javax.xml.rpc.ServiceException {
        setEndpointAddress(portName.getLocalPart(), address);
    }

}

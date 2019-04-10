package org.tempuri;

public class IReminderProxy implements org.tempuri.IReminder {
  private String _endpoint = null;
  private org.tempuri.IReminder iReminder = null;
  
  public IReminderProxy() {
    _initIReminderProxy();
  }
  
  public IReminderProxy(String endpoint) {
    _endpoint = endpoint;
    _initIReminderProxy();
  }
  
  private void _initIReminderProxy() {
    try {
      iReminder = (new org.tempuri.ReminderLocator()).getBasicHttpBinding_IReminder();
      if (iReminder != null) {
        if (_endpoint != null)
          ((javax.xml.rpc.Stub)iReminder)._setProperty("javax.xml.rpc.service.endpoint.address", _endpoint);
        else
          _endpoint = (String)((javax.xml.rpc.Stub)iReminder)._getProperty("javax.xml.rpc.service.endpoint.address");
      }
      
    }
    catch (javax.xml.rpc.ServiceException serviceException) {}
  }
  
  public String getEndpoint() {
    return _endpoint;
  }
  
  public void setEndpoint(String endpoint) {
    _endpoint = endpoint;
    if (iReminder != null)
      ((javax.xml.rpc.Stub)iReminder)._setProperty("javax.xml.rpc.service.endpoint.address", _endpoint);
    
  }
  
  public org.tempuri.IReminder getIReminder() {
    if (iReminder == null)
      _initIReminderProxy();
    return iReminder;
  }
  
  public org.datacontract.schemas._2004._07.ReminderService.ReminderDetail[] getAllReminders(java.lang.String userId) throws java.rmi.RemoteException{
    if (iReminder == null)
      _initIReminderProxy();
    return iReminder.getAllReminders(userId);
  }
  
  public java.lang.String insertReminder(java.lang.String userId, java.util.Calendar date, java.lang.String time, java.lang.String eventType, java.lang.String description) throws java.rmi.RemoteException{
    if (iReminder == null)
      _initIReminderProxy();
    return iReminder.insertReminder(userId, date, time, eventType, description);
  }
  
  public java.lang.String updateReminder(java.lang.String userId, java.util.Calendar date, java.lang.String time, java.lang.String eventType, java.lang.String desciption) throws java.rmi.RemoteException{
    if (iReminder == null)
      _initIReminderProxy();
    return iReminder.updateReminder(userId, date, time, eventType, desciption);
  }
  
  public java.lang.String deleteReminder(java.lang.String userId, java.util.Calendar date, java.lang.String eventType) throws java.rmi.RemoteException{
    if (iReminder == null)
      _initIReminderProxy();
    return iReminder.deleteReminder(userId, date, eventType);
  }
  
  
}
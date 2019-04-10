/**
 * IReminder.java
 *
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package org.tempuri;

public interface IReminder extends java.rmi.Remote {
    public org.datacontract.schemas._2004._07.ReminderService.ReminderDetail[] getAllReminders(java.lang.String userId) throws java.rmi.RemoteException;
    public java.lang.String insertReminder(java.lang.String userId, java.util.Calendar date, java.lang.String time, java.lang.String eventType, java.lang.String description) throws java.rmi.RemoteException;
    public java.lang.String updateReminder(java.lang.String userId, java.util.Calendar date, java.lang.String time, java.lang.String eventType, java.lang.String desciption) throws java.rmi.RemoteException;
    public java.lang.String deleteReminder(java.lang.String userId, java.util.Calendar date, java.lang.String eventType) throws java.rmi.RemoteException;
}

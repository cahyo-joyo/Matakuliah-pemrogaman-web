using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Praktikum
{
    #region Covid
    public class Covid
    {
        #region Member Variables
        protected int _id_negara;
        protected string _negara;
        protected int _total_kasus;
        protected int _kasus_baru;
        protected int _total_mati;
        protected int _mati_baru;
        protected int _total_sembuh;
        protected int _kasus_aktif;
        #endregion
        #region Constructors
        public Covid() { }
        public Covid(string negara, int total_kasus, int kasus_baru, int total_mati, int mati_baru, int total_sembuh, int kasus_aktif)
        {
            this._negara=negara;
            this._total_kasus=total_kasus;
            this._kasus_baru=kasus_baru;
            this._total_mati=total_mati;
            this._mati_baru=mati_baru;
            this._total_sembuh=total_sembuh;
            this._kasus_aktif=kasus_aktif;
        }
        #endregion
        #region Public Properties
        public virtual int Id_negara
        {
            get {return _id_negara;}
            set {_id_negara=value;}
        }
        public virtual string Negara
        {
            get {return _negara;}
            set {_negara=value;}
        }
        public virtual int Total_kasus
        {
            get {return _total_kasus;}
            set {_total_kasus=value;}
        }
        public virtual int Kasus_baru
        {
            get {return _kasus_baru;}
            set {_kasus_baru=value;}
        }
        public virtual int Total_mati
        {
            get {return _total_mati;}
            set {_total_mati=value;}
        }
        public virtual int Mati_baru
        {
            get {return _mati_baru;}
            set {_mati_baru=value;}
        }
        public virtual int Total_sembuh
        {
            get {return _total_sembuh;}
            set {_total_sembuh=value;}
        }
        public virtual int Kasus_aktif
        {
            get {return _kasus_aktif;}
            set {_kasus_aktif=value;}
        }
        #endregion
    }
    #endregion
}
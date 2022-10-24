using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Admin
    public class Admin
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _pass;
        #endregion
        #region Constructors
        public Admin() { }
        public Admin(string name, string pass)
        {
            this._name=name;
            this._pass=pass;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Pass
        {
            get {return _pass;}
            set {_pass=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Cinema
    public class Cinema
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _img;
        protected string _genre;
        protected string _director;
        protected string _cast;
        protected unknown _date;
        protected string _info;
        protected string _rating;
        protected int _tickets;
        protected string _time;
        protected string _category;
        protected string _category;
        protected string _video;
        #endregion
        #region Constructors
        public Cinema() { }
        public Cinema(string name, string img, string genre, string director, string cast, unknown date, string info, string rating, int tickets, string time, string category, string category, string video)
        {
            this._name=name;
            this._img=img;
            this._genre=genre;
            this._director=director;
            this._cast=cast;
            this._date=date;
            this._info=info;
            this._rating=rating;
            this._tickets=tickets;
            this._time=time;
            this._category=category;
            this._category=category;
            this._video=video;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Img
        {
            get {return _img;}
            set {_img=value;}
        }
        public virtual string Genre
        {
            get {return _genre;}
            set {_genre=value;}
        }
        public virtual string Director
        {
            get {return _director;}
            set {_director=value;}
        }
        public virtual string Cast
        {
            get {return _cast;}
            set {_cast=value;}
        }
        public virtual unknown Date
        {
            get {return _date;}
            set {_date=value;}
        }
        public virtual string Info
        {
            get {return _info;}
            set {_info=value;}
        }
        public virtual string Rating
        {
            get {return _rating;}
            set {_rating=value;}
        }
        public virtual int Tickets
        {
            get {return _tickets;}
            set {_tickets=value;}
        }
        public virtual string Time
        {
            get {return _time;}
            set {_time=value;}
        }
        public virtual string Category
        {
            get {return _category;}
            set {_category=value;}
        }
        public virtual string Category
        {
            get {return _category;}
            set {_category=value;}
        }
        public virtual string Video
        {
            get {return _video;}
            set {_video=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Films
    public class Films
    {
        #region Member Variables
        protected int _id;
        protected string _title;
        protected string _image;
        #endregion
        #region Constructors
        public Films() { }
        public Films(string title, string image)
        {
            this._title=title;
            this._image=image;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Image
        {
            get {return _image;}
            set {_image=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Gigs
    public class Gigs
    {
        #region Member Variables
        protected int _id;
        protected string _day;
        protected unknown _date;
        protected string _band;
        protected string _venue;
        protected string _link;
        protected string _time;
        #endregion
        #region Constructors
        public Gigs() { }
        public Gigs(string day, unknown date, string band, string venue, string link, string time)
        {
            this._day=day;
            this._date=date;
            this._band=band;
            this._venue=venue;
            this._link=link;
            this._time=time;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Day
        {
            get {return _day;}
            set {_day=value;}
        }
        public virtual unknown Date
        {
            get {return _date;}
            set {_date=value;}
        }
        public virtual string Band
        {
            get {return _band;}
            set {_band=value;}
        }
        public virtual string Venue
        {
            get {return _venue;}
            set {_venue=value;}
        }
        public virtual string Link
        {
            get {return _link;}
            set {_link=value;}
        }
        public virtual string Time
        {
            get {return _time;}
            set {_time=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Mp
    public class Mp
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _code;
        protected unknown _price;
        protected string _mp;
        #endregion
        #region Constructors
        public Mp() { }
        public Mp(string name, string code, unknown price, string mp)
        {
            this._name=name;
            this._code=code;
            this._price=price;
            this._mp=mp;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Code
        {
            get {return _code;}
            set {_code=value;}
        }
        public virtual unknown Price
        {
            get {return _price;}
            set {_price=value;}
        }
        public virtual string Mp
        {
            get {return _mp;}
            set {_mp=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region News
    public class News
    {
        #region Member Variables
        protected string _p;
        protected string _p;
        protected string _iframe;
        protected int _id;
        #endregion
        #region Constructors
        public News() { }
        public News(string p, string p, string iframe)
        {
            this._p=p;
            this._p=p;
            this._iframe=iframe;
        }
        #endregion
        #region Public Properties
        public virtual string P
        {
            get {return _p;}
            set {_p=value;}
        }
        public virtual string P
        {
            get {return _p;}
            set {_p=value;}
        }
        public virtual string Iframe
        {
            get {return _iframe;}
            set {_iframe=value;}
        }
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Photo
    public class Photo
    {
        #region Member Variables
        protected int _id;
        protected string _img;
        protected string _text;
        protected string _band;
        protected string _venue;
        protected unknown _date;
        #endregion
        #region Constructors
        public Photo() { }
        public Photo(string img, string text, string band, string venue, unknown date)
        {
            this._img=img;
            this._text=text;
            this._band=band;
            this._venue=venue;
            this._date=date;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Img
        {
            get {return _img;}
            set {_img=value;}
        }
        public virtual string Text
        {
            get {return _text;}
            set {_text=value;}
        }
        public virtual string Band
        {
            get {return _band;}
            set {_band=value;}
        }
        public virtual string Venue
        {
            get {return _venue;}
            set {_venue=value;}
        }
        public virtual unknown Date
        {
            get {return _date;}
            set {_date=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Products
    public class Products
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _band;
        protected unknown _price;
        #endregion
        #region Constructors
        public Products() { }
        public Products(string name, string band, unknown price)
        {
            this._name=name;
            this._band=band;
            this._price=price;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Band
        {
            get {return _band;}
            set {_band=value;}
        }
        public virtual unknown Price
        {
            get {return _price;}
            set {_price=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected int _id;
        protected string _email;
        protected string _username;
        protected unknown _dob;
        protected string _password;
        protected string _password;
        protected string _category;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string email, string username, unknown dob, string password, string password, string category)
        {
            this._email=email;
            this._username=username;
            this._dob=dob;
            this._password=password;
            this._password=password;
            this._category=category;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual unknown Dob
        {
            get {return _dob;}
            set {_dob=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Category
        {
            get {return _category;}
            set {_category=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace HNCWEBMR
{
    #region Video
    public class Video
    {
        #region Member Variables
        protected int _id;
        protected string _iframe;
        protected string _band;
        protected string _name;
        #endregion
        #region Constructors
        public Video() { }
        public Video(string iframe, string band, string name)
        {
            this._iframe=iframe;
            this._band=band;
            this._name=name;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Iframe
        {
            get {return _iframe;}
            set {_iframe=value;}
        }
        public virtual string Band
        {
            get {return _band;}
            set {_band=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        #endregion
    }
    #endregion
}
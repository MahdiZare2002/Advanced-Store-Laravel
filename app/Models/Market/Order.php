<?php

namespace App\Models\Market;

use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
  use HasFactory, SoftDeletes;


  protected $guarded = ['id'];


  public function payment()
  {
    return $this->belongsTo(Payment::class);
  }
  public function delivery()
  {
    return $this->belongsTo(Delivery::class);
  }
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function address()
  {
    return $this->belongsTo(Address::class);
  }
  public function copan()
  {
    return $this->belongsTo(Copan::class);
  }
  public function commonDiscount()
  {
    return $this->belongsTo(CommonDiscount::class);
  }

  public function orderItems()
  {
    return $this->hasMany(OrderItem::class);
  }

  public function getPaymentStatusValueAttribute()
  {
    switch ($this->payment_status) {
      case 0:
        $result = 'پرداخت نشده';
        break;
      case 1:
        $result = 'پرداخت شده';
        break;
      case 2:
        $result = 'باطل شده';
        break;
      default:
        $result = 'برگشت داده شده';
    }
    return $result;
  }

  public function getPaymentTypeValueAttribute()
  {
    switch ($this->payment_type) {
      case 0:
        $result = 'آنلاین';
        break;
      case 1:
        $result = 'آفلاین';
        break;
      default:
        $result = 'در محل';
    }
    return $result;
  }

  public function getDeliveryStatusValueAttribute()
  {
    switch ($this->delivery_status) {
      case 0:
        $result = 'ارسال نشده';
        break;
      case 1:
        $result = 'در حال ارسال';
        break;
      case 2:
        $result = 'ارسال شده';
        break;
      default:
        $result = 'تحویل شده';
    }
    return $result;
  }


  public function getOrderStatusValueAttribute()
  {
    switch ($this->order_status) {
      case 1:
        $result = 'در انتظار تایید';
        break;
      case 2:
        $result = 'تاییده نشده';
        break;
      case 3:
        $result = 'تایید شده';
        break;
      case 4:
        $result = 'باطل شده';
        break;
      case 5:
        $result = 'مرجوع شده';
        break;
      default:
        $result = 'بررسی نشده';
    }
    return $result;
  }
}
